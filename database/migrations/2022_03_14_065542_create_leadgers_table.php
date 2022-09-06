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
        Schema::create('leadgers', function (Blueprint $table) {
            $table->id('id');
            $table->integer('inv_id');
            $table->string('voucher_type')->nullable();
            $table->string('account_id')->nullable();
            $table->string('decription')->nullable();
            $table->date('date')->nullable();
            $table->string('Credit')->nullable();
            $table->string('Debit')->nullable();
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
        Schema::dropIfExists('leadgers');
    }
};
