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
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('Name')->nullable($value=false);
            $table->text('Description')->nullable($value=false);
            $table->integer('Price')->nullable($value=false);
            $table->enum('Status',['Activo','Inactivo']);
            $table->string('Image')->nullable(true);        
            $table->unsignedBigInteger('categorias_id'); 
            $table->foreign('categorias_id')
                    ->references('id')
                        ->on('categorias');//ref a la tabla de migración 
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
        Schema::dropIfExists('products');
    }
}
