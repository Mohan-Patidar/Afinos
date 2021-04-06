<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageSectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_section', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('page_id')->unsigned()->index();
            $table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade');
            $table->integer('section_id')->unsigned()->index();
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
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
        Schema::table('page_section', function (Blueprint $table) {
            $table->dropForeign('imagecategory_module_imagecategory_id_foreign');
            $table->dropForeign('imagecategory_module_module_id_foreign');
        });
    }
}
