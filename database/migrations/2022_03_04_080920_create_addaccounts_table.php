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
        Schema::create('addaccounts', function (Blueprint $table) {
            $table->id();
            $table->string('accountgroup')->nullable();
            $table->integer('accountcode')->nullable();
            $table->string('accountname')->nullable();
            $table->string('phone')->nullable();
            $table->string('phonetwo')->nullable();
            $table->string('address')->nullable();
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
        Schema::dropIfExists('addaccounts');
    }
};
