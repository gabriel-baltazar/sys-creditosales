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
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string('nome',150);
            $table->string('cpf', 14)->unique()->nullable();
            $table->date('data_nasc', 14)->nullable();
            $table->string('endereco', 255)->nullable();
            $table->string('numero', 30)->nullable();
            $table->string('bairro', 30)->nullable();
            $table->string('cep', 9)->nullable();
            $table->string('cidade', 60)->nullable();
            $table->string('uf', 2)->nullable();
            $table->bigInteger('telefone')->nullable();
            $table->string('email',150)->nullable();
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
        Schema::dropIfExists('cliente');
    }
};
