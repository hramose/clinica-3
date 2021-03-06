<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNeurosonografiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('neurosonografias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('consulta_id');
            $table->string('referido')->nullable();
            $table->string('edad', 30)->nullable();
            $table->string('date')->nullable();
            $table->string('edad_gestacional')->nullable();
            $table->string('paridad')->nullable();
            $table->string('morbilidad')->nullable();
            $table->string('rh_tipo')->nullable();
            $table->string('feto');
            $table->string('revision')->nullable();
            $table->string('conclusion_embarazo_gestacion')->nullable();
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
        Schema::dropIfExists('neurosonografias');
    }
}
