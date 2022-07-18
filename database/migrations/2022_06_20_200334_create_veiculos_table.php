<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->foreignId('situacao_id')->constrained('situacoes');
            $table->foreignId('tipo_veiculo_id')->constrained('tipos_veiculo');
            $table->foreignId('modelo_id')->constrained('modelos');
            $table->foreignId('combustivel_id')->constrained('combustiveis');
            $table->foreignId('cor_id')->constrained('cores');
            $table->string('placa', 10);
            $table->year('ano_fabricacao');
            $table->year('ano_modelo');
            $table->string('renavam');
            $table->string('chassi')->nullable();
            $table->string('odometro')->nullable();
            $table->string('motorizacao');
            $table->string('foto')->nullable();
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
        Schema::dropIfExists('veiculos');
    }
}
