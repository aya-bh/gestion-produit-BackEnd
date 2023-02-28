<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 70);
            $table->string('description', 320);
            $table->integer('quantite');
            $table->unsignedBigInteger('categorie_id');
            $table->unsignedBigInteger('codebarre_id');
            $table->unsignedBigInteger('qrcode_id');
            $table->timestamps();

            $table->foreign('categorie_id')
            ->references('id')
            ->on('categorie')
            ->onDelete('cascade');

            $table->foreign('codebarre_id')
                ->references('id')
                ->on('codebarre')
                ->onDelete('cascade');

            $table->foreign('qrcode_id')
                ->references('id')
                ->on('qrcode')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produits');
    }
};
