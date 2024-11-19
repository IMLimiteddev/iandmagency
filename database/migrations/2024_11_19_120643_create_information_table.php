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
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->longText('bio')->nullable();
            $table->longText('image')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('department')->nullable();
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
        Schema::dropIfExists('information');
    }
};
