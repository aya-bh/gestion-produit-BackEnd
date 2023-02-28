<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProduitsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    /**
     * Home Routes
     */


    Route::group(['middleware' => ['guest']], function () {

        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('affichage_inscription');
        Route::post('/register', 'RegisterController@register')->name('inscription');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('affichage_connection');
        Route::post('/login', 'LoginController@login')->name('connection');
        Route::get('account/verify/{token}', [RegisterController::class, 'verifyAccount'])->name('verification_utilisateur'); 


    });

    Route::group(['middleware' => ['auth', 'permission']], function () {

        //Route::get('/email/verify', 'VerificationController@show')->name('verification.notice');
        //Route::get('/email/verify/{id}/{hash}', 'VerificationController@verify')->name('verification.verify')->middleware(['signed']);
       // Route::post('/email/resend', 'VerificationController@resend')->name('verification.resend');

        Route::group(['middleware' => ['is_verify_email']], function () {
            Route::get('/', 'HomeController@index')->name('accueil');
            /**
             * Logout Routes
             */
            Route::get('/logout', 'LogoutController@perform')->name('deconnecter');

            /**
             * User Routes
             */
            Route::group(['prefix' => 'Utilisateurs'], function () {
                Route::get('/', 'UsersController@index')->name('utilisateur.accueil');
                Route::get('/create', 'UsersController@create')->name('utilisateur.creer');
                Route::post('/create', 'UsersController@store')->name('enregistrement_utilisateur');
                Route::get('/{user}/show', 'UsersController@show')->name('afficher_utilisateur');
                Route::get('/{user}/edit', 'UsersController@edit')->name('page_modification_utilisateur');
                Route::patch('/{user}/update', 'UsersController@update')->name('modifier_utilisateur');
                Route::delete('/{user}/delete', 'UsersController@destroy')->name('detruire_utilisateur');
                Route::get('user/delete/{id}', [UsersController::class, 'delete'])->name('users.effacer');
            });

            Route::group(['prefix' => 'Produits'], function () {
                Route::get('/', 'ProduitsController@index')->name('produit.accueil');
                Route::get('/create', 'ProduitsController@create')->name('page_creation_produit');
                Route::post('/create', 'ProduitsController@store')->name('enregistrement_produit');
                Route::get('/{produit}/show', 'ProduitsController@show')->name('affichage_produit');
                Route::get('/{produit}/edit', 'ProduitsController@edit')->name('page_modification_produit');
                Route::patch('/{produit}/update', 'ProduitsController@update')->name('modifier_produit');
                Route::delete('/{produit}/delete', 'ProduitsController@destroy')->name('detruire_produit');
                Route::get('produit/delete/{id}', [ProduitsController::class, 'delete'])->name('produits.effacer');
            });

            Route::group(['prefix' => 'Catégories'], function () {
                Route::get('/', 'CategorieController@index')->name('categorie.accueil');
                Route::get('/create', 'CategorieController@create')->name('page_creation_categorie');
                Route::post('/create', 'CategorieController@store')->name('creation_categorie');
                Route::get('/{categorie}/show', 'CategorieController@show')->name('affichage_categorie');
                Route::get('/{categorie}/edit', 'CategorieController@edit')->name('page_modification_categorie');
                Route::patch('/{categorie}/update', 'CategorieController@update')->name('modifier_categorie');
                Route::delete('/{categorie}/delete', 'CategorieController@destroy')->name('detruire_categorie');
                Route::get('categorie/delete/{id}', [CategorieController::class, 'delete'])->name('categorie.effacer');
            });


            Route::group(['prefix' => 'Roles'], function () {
                Route::get('/', 'RolesController@index')->name('roles.accueil');
                Route::get('/create', 'RolesController@create')->name('page_creation_role');
                Route::post('/create', 'RolesController@store')->name('enregistrement_role');
                Route::get('/{role}/show', 'RolesController@show')->name('affichage_role');
                Route::get('/{role}/edit', 'RolesController@edit')->name('page_modification_role');
                Route::patch('/{role}/update', 'RolesController@update')->name('modifier_role');
                Route::delete('/{role}/delete', 'RolesController@destroy')->name('detruire_role');
                Route::get('role/delete/{id}', [RolesController::class, 'delete'])->name('roles.effacer');
            });

            Route::group(['prefix' => 'Permissions'], function () {
                Route::get('/', 'PermissionsController@index')->name('permissions.accueil');
                Route::get('/create', 'PermissionsController@create')->name('page_creation_permission');
                Route::post('/create', 'PermissionsController@store')->name('enregistrement_permission');
                Route::get('/{permission}/show', 'PermissionsController@show')->name('affichage_permission');
                Route::get('/{permission}/edit', 'PermissionsController@edit')->name('page_modification_permission');
                Route::patch('/{permission}/update', 'PermissionsController@update')->name('modifier_permission');
                Route::delete('/{permission}/delete', 'PermissionsController@destroy')->name('detruire_permission');
                Route::get('permission/delete/{id}', [PermissionsController::class, 'delete'])->name('permissions.effacer');
            });


            //Route::resource('roles', RolesController::class);
            //Route::resource('permissions', PermissionsController::class);

            //Route::get('role/delete/{id}', [RolesController::class, 'delete'])->name('roles.effacer');
           // Route::get('permission/delete/{id}', [PermissionsController::class, 'delete'])->name('permissions.effacer');
        });
    });
});
