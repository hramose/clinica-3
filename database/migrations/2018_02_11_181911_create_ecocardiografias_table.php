<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEcocardiografiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecocardiografias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('consulta_id');
            $table->string('edad', 30)->nullable();
            $table->string('date')->nullable();
            $table->string('paridad')->nullable();
            $table->string('referido')->nullable();
            $table->string('feto');
            $table->string('revision')->nullable();
            $table->text('concluciones')->nullable();
            $table->text('comentarios')->nullable();
            $table->text('recomendaciones')->nullable();
            $table->text('recordatorio')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ecocardiografias');
    }
}
