<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('title');
            $table->longText('address');
            $table->bigInteger('city_id');
            $table->bigInteger('district_id');
            $table->bigInteger('sub_district_id');
            $table->timestamps();
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('district_id')->references('id')->on('districts');
            $table->foreign('sub_districts')->references('id')->on('sub_istricts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
