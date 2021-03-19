<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreatePhrasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phrases', function (Blueprint $table) {
            $table->id();
            $table->string('author');
            $table->string('text');
            $table->timestamps();
        });


        DB::table('phrases')->insert(array('text' => 'Não é o que nós temos na vida, mas quem nós temos em nossas vidas que importa'                                    ,'author' => 'Autor Desconhecido' , 'id' => 1  ));
        DB::table('phrases')->insert(array('text' => 'Você não escolhe sua família. Eles são um presente de Deus para você, assim como você é para eles'                ,'author' => 'Desmond Tutu'       , 'id' => 2  ));
        DB::table('phrases')->insert(array('text' => 'A felicidade é multiplicada quando dividida com a família'                                                        ,'author' => 'Autor Desconhecido' , 'id' => 3  ));
        DB::table('phrases')->insert(array('text' => 'Só existem dois dias do ano em que você não pode fazer nada: um se chama ontem e outro amanhã'                    ,'author' => 'Dalai Lama'         , 'id' => 4  ));
        DB::table('phrases')->insert(array('text' => 'Paz e harmonia: eis a verdadeira riqueza de uma família.'                                                         ,'author' => 'Benjamin Franklin'  , 'id' => 5  ));
        DB::table('phrases')->insert(array('text' => 'Família é como uma canoa em um oceano. Todos remam juntos com um mesmo propósito'                                 ,'author' => 'Autor Desconhecido' , 'id' => 6  ));
        DB::table('phrases')->insert(array('text' => 'A família é um salva-vidas no mar agitado da vida.'                                                               ,'author' => 'J.K. Rowling'       , 'id' => 7  ));
        DB::table('phrases')->insert(array('text' => 'Uma família feliz nada mais é que o paraíso antecipado.'                                                          ,'author' => 'George Bernard Shaw', 'id' => 8  ));
        DB::table('phrases')->insert(array('text' => 'Família não é uma coisa importante. É tudo.'                                                                      ,'author' => 'Michael J. Fox'     , 'id' => 9  ));
        DB::table('phrases')->insert(array('text' => 'De todas as maneiras possíveis, a família é um laço com o passado e a ponte para o futuro.'                       ,'author' => 'Alex Haley'         , 'id' => 10 ));
        DB::table('phrases')->insert(array('text' => 'A família é a bússola que nos guia. A inspiração para voarmos alto e o conforto quando ocasionalmente falharmos.' ,'author' => 'Brad Henry'         , 'id' => 11 ));
        DB::table('phrases')->insert(array('text' => 'Quem tem uma família feliz, unida e cheia de amor não precisa de mais nada.'                                      ,'author' => 'Mariana'            , 'id' => 12 ));
        DB::table('phrases')->insert(array('text' => 'O amor da família e a admiração dos amigos é muito mais importante do que a riqueza e os privilégios.'            ,'author' => 'Charles Kuralt'     , 'id' => 13 ));
        DB::table('phrases')->insert(array('text' => 'A família é uma das obras-primas da natureza.'                                                                    ,'author' => 'George Santayana'   , 'id' => 14 ));
        DB::table('phrases')->insert(array('text' => 'Família: o nosso bem mais precioso. Nutre e guarde este amor'                                                     ,'author' => 'Autor Desconhecido' , 'id' => 15 ));
        DB::table('phrases')->insert(array('text' => 'Família é onde nossa história começa.'                                                                            ,'author' => 'Autor Desconhecido' , 'id' => 16 ));
        DB::table('phrases')->insert(array('text' => 'Família: base de tudo.'                                                                                           ,'author' => 'Autor Desconhecido' , 'id' => 17 ));
        DB::table('phrases')->insert(array('text' => 'Quando as raízes são profundas, não há razão para temer o ventor'                                                 ,'author' => 'Autor Desconhecido' , 'id' => 18 ));
        DB::table('phrases')->insert(array('text' => 'Uma família unida é a base que sustenta todos os seus membros'                                                    ,'author' => 'Autor Desconhecido' , 'id' => 19 ));
        DB::table('phrases')->insert(array('text' => 'Uma família unida pode ser um verdadeiro alicerce na construção da felicidade'                                    ,'author' => 'Autor Desconhecido' , 'id' => 20 ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phrases');
    }
}
