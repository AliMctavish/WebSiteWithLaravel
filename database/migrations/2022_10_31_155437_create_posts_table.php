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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->longText('subject');
            $table->longText('VideoUrl')->nullable();
            $table->longText('writer')->nullable();
            $table->bigInteger('views')->default(0);
            $table->bigInteger('likes')->default(0);
            $table->bigInteger('downloads')->default(0);
            $table->string('image')->nullable();
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('main_categories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');

          });
        Schema::dropIfExists('posts');
    }
};
