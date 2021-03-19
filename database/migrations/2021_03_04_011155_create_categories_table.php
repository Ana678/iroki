<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('icon');
            $table->timestamps();
        });


        DB::table('categories')->insert(array('name' => 'Alimentos Básicos' ,'icon' => 'fas fa-shopping-basket'  ));
        DB::table('categories')->insert(array('name' => 'Cereais'           ,'icon' => 'fab fa-pagelines'        ));
        DB::table('categories')->insert(array('name' => 'Enlatados'         ,'icon' => 'icon ion-soup-can'       ));
        DB::table('categories')->insert(array('name' => 'Frios e Congelados','icon' => 'fas fa-snowflake'        ));
        DB::table('categories')->insert(array('name' => 'Açougue e Peixes'  ,'icon' => 'fas fa-store'            ));
        DB::table('categories')->insert(array('name' => 'Laticínios'        ,'icon' => 'fas fa-cheese'           ));
        DB::table('categories')->insert(array('name' => 'Bebidas'           ,'icon' => 'fas fa-glass-cheers'     ));
        DB::table('categories')->insert(array('name' => 'Padaria'           ,'icon' => 'fa fa-birthday-cake'     ));
        DB::table('categories')->insert(array('name' => 'Guloseimas'        ,'icon' => 'fas fa-ice-cream'        ));
        DB::table('categories')->insert(array('name' => 'Itens de Pets'     ,'icon' => 'icon ion-ios-paw-outline'));
        DB::table('categories')->insert(array('name' => 'Frutas e Vegetais' ,'icon' => 'far fa-lemon'            ));
        DB::table('categories')->insert(array('name' => 'Higiene Pessoal'   ,'icon' => 'fas fa-toilet-paper'     ));
        DB::table('categories')->insert(array('name' => 'Limpeza Doméstica' ,'icon' => 'fas fa-broom'            ));
        DB::table('categories')->insert(array('name' => 'Utilidades'        ,'icon' => 'fa fa-star'              ));
        DB::table('categories')->insert(array('name' => 'Outros'            ,'icon' => 'icon ion-ios-football'   ));
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
