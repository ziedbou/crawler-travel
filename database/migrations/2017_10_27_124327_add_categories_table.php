<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            //category settings
            $table->string('name');
            $table->string('url');
            $table->string('state');
            $table->string('theme');
            $table->string('type');//automatique ou manuel


            //produits settings
            $table->string('html_classname')->nullable();
            $table->string('name_classname')->nullable();
            $table->string('url_classname')->nullable();
            $table->string('prix_classname')->nullable();
            $table->string('description_classname')->nullable();
            $table->string('periode_classname')->nullable();
            $table->string('image_classname')->nullable();
            $table->string('id_produit')->nullable();
            $table->string('promotion_classname')->nullable();
            $table->string('type_produit')->nullable(); //array ou classes


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
