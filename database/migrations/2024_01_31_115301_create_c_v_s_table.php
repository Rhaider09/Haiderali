<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCVSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_v_s', function (Blueprint $table) {
            $table->id();
            $table->tinyText('name');
            $table->tinyText('title');
            $table->tinyText('image');
            $table->tinyText('email');
            $table->tinyText('phone_no');
            $table->tinyText('website');
            $table->tinyText('address');
            $table->string('description');
            $table->string('uni_image');
            $table->string('uni_name');
            $table->string('uni_degree');
            $table->string('uni_year');
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
        Schema::dropIfExists('c_v_s');
    }
}
