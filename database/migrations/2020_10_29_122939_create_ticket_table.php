<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('identerprise')->unsigned();
            $table->string('name', 80);
            $table->decimal('price', 6, 2);
            $table->date('initialdate');
            $table->date('finaldate');
            $table->time('initialtime');
            $table->time('finaltime');
            $table->boolean('active')->default(true);
            $table->text('description')->nullable();
            $table->decimal('profit', 4, 1)->default(15.0);
            $table->timestamps();
            
            $table->foreign('identerprise')->references ('id')->on('enterprise');
            $table->unique(['identerprise', 'name']); //una misma empresa no deberia de tener dos tickets con el mismo nombre
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket');
    }
}
