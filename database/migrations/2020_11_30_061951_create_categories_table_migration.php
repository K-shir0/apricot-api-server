<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTableMigration extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('parent_id')->unsigned()->nullable();
            $table->bigInteger('position', false, true);
            $table->softDeletes();

            $table->foreign('parent_id')
                ->references('id')
                ->on('categories')
                ->onDelete('set null');

        });

        Schema::create('category_closure', function (Blueprint $table) {
            $table->increments('closure_id');

            $table->bigInteger('ancestor', false, true);
            $table->bigInteger('descendant', false, true);
            $table->bigInteger('depth', false, true);

            $table->foreign('ancestor')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');

            $table->foreign('descendant')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');

        });
    }

    public function down()
    {
        Schema::dropIfExists('category_closure');
        Schema::dropIfExists('categories');
    }
}
