<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVendas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->id();

            $table->string('clienteVenda')->nullable();
            $table->date('dataVenda')->nullable();
            $table->string('pagoVenda')->nullable();
            $table->string('obsVenda')->nullable();
            $table->integer('qtdVenda')->nullable();
            $table->decimal('totalVenda')->nullable();
            $table->decimal('valVendaProduto')->nullable();
            $table->integer('idProduto')->nullable();
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
        //
    }
}
