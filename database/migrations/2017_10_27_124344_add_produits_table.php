<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            
            $table->increments('id');

            $table->string('name')->nullable();
            $table->string('url')->nullable();
            $table->string('prix')->nullable();
            $table->string('description')->nullable();
            $table->string('periode')->nullable();
            $table->string('date')->nullable();
            $table->string('promotion')->nullable();

            //sur le site
            $table->string('produit_id')->nullable();
           

            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
           
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
        Schema::dropIfExists('produits');
    }
}
