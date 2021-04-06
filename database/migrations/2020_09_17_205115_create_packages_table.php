<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id('id');
            $table->string('name', 255);
            $table->string('price', 255);
            $table->integer('recurrance_id')->unsigned();
            $table->string('headline', 255);
            $table->longText('description', 255);
            $table->timestamps();
        });
        // Schema::table('packages', function (Blueprint $table) {
        //     $table->foreign('recurrance_id')->references('id')->on('recurrances');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
