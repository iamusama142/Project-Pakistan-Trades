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
        Schema::create('creditvouchers', function (Blueprint $table) {
            $table->id();
            $table->integer('creditvoucherno');
            $table->string('c_accountname');
            $table->integer('c_ammount');
            $table->string('c_description');
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
        Schema::dropIfExists('creditvouchers');
    }
};
