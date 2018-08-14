<?php

/**
 * Created by PhpStorm.
 * User: Herval
 * Date: 14/08/2018
 * Time: 12:09
 */
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateTrocasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trocas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('unit_id')->unsigned();
            $table->integer('user1_id')->unsigned();
            $table->enum('turma1', ['A', 'B', 'C', 'D', 'E']);
            $table->integer('user2_id')->unsigned();
            $table->enum('turma2', ['A', 'B', 'C', 'D', 'E']);
            $table->date('data1');
            $table->enum('turno1', ['1º Turno', '2º Turno', '3º Turno']);
            $table->enum('tipo1', ['TT', 'TF']);
            $table->enum('tipo2', ['TT', 'TF']);
            $table->date('data2');
            $table->enum('turno2', ['1º Turno', '2º Turno', '3º Turno']);
            $table->enum('tipo3', ['TT', 'TF']);
            $table->enum('tipo4', ['TT', 'TF']);
            $table->enum('situacao', ['Autorizada', 'Cadastrada', 'Cancelada', 'Concluída', 'Confirmada', 'Pendente', 'Rejeitada']);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('unit_id')->references('id')->on('units');
            $table->foreign('user1_id')->references('id')->on('users');
            $table->foreign('user2_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trocas');
    }
}