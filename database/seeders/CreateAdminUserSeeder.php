<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use App\Models\UserVerify;
use Illuminate\Support\Str;
class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Ayabh', 
            'email' => 'Ayabenhaj@gmail.com',
            'username' => 'ayabenhaj',
            'password' => 'admin123'
        ]);
    
        //$role = Role::create(['name' => 'Admin']);

        //$permissions = Permission::pluck('id','id')->all();

        //$role->syncPermissions($permissions);

        $user->assignRole("admin");
        $token = Str::random(64);
        $verifyUser = UserVerify::create([
            'user_id' => $user->id,
            'token' => $token
        ]);
        $user = $verifyUser->user;
        $verifyUser->user->is_email_verified = 1;
        $verifyUser->user->save();
    }
}