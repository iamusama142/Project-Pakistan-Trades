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
        Schema::create('generalvouchers', function (Blueprint $table) {
            $table->id();
            $table->integer('jvno');
            $table->string('acc_id')->nullable();
            $table->integer('cvammount')->nullable();
            $table->integer('dvammount')->nullable();
            $table->date('date')->nullable();
            $table->string('description')->nullable();


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
        Schema::dropIfExists('generalvouchers');
    }
};
