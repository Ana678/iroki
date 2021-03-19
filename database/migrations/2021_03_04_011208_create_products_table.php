<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('quantity');
            $table->string('description')->nullable();
            $table->integer('status');
            $table->foreignId('family_id')->constrained();
            $table->foreignId('category_id')->constrained();
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
        Schema::table('products', function (Blueprint $table) {
            $table->foreignId('family_id')
            ->constrained()
            ->onDelete('cascade');
        });
        Schema::table('products', function (Blueprint $table) {
            $table->foreignId('category_id')
            ->constrained()
            ->onDelete('cascade'); 
        });

        Schema::dropIfExists('products');
    }
}
