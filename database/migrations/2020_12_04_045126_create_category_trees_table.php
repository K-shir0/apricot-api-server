<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_trees', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_id')->unsigned();
            $table->integer('child_id')->unsigned();
            $table->foreign('parent_id')->references('id')->on('categories');
            $table->foreign('child_id')->references('id')->on('categories');
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
        Schema::dropIfExists('category_trees');
    }
}
