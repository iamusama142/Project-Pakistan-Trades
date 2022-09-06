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
        Schema::create('pak_traders', function (Blueprint $table) {
            $table->id();
              // purchaser form

              $table->integer('invoiceno');
              $table->date('date_create');
              $table->string('purchasername');
              $table->string('sellername');
              $table->integer('p_gateno')->nullable();
              $table->string('p_vehicleno')->nullable();
              $table->string('p_product')->nullable();
              $table->integer('p_firstwt')->nullable();
              $table->integer('p_bouri')->nullable();
              $table->integer('p_bourirate')->nullable();
              $table->integer('p_bouritotal')->nullable();
              $table->integer('p_bouritwo')->nullable();
              $table->integer('p_bouriratetwo')->nullable();
              $table->integer('p_bouritwototal')->nullable();
              $table->integer('p_thela')->nullable();
              $table->integer('p_thelarate')->nullable();
              $table->integer('p_thelatotal')->nullable();
              $table->integer('p_thelatwo')->nullable();
              $table->integer('p_thelatworate')->nullable();
              $table->integer('p_thelatwototal')->nullable();
              $table->integer('p_bwt')->nullable();
              $table->integer('p_ewt')->nullable();
              $table->integer('p_netwt')->nullable();
              $table->integer('p_rate')->nullable();
              $table->integer('p_totalamount')->nullable();
              $table->integer('p_barrs')->nullable();
              $table->integer('p_vrent')->nullable();
              $table->integer('p_netamount')->nullable();
              // seller form
              $table->integer('s_gateno')->nullable();
              $table->string('s_vehicleno')->nullable();
              $table->integer('s_firstwt')->nullable();
              $table->integer('s_bouri')->nullable();
              $table->integer('s_bourirate')->nullable();
              $table->integer('s_bouritotal')->nullable();
              $table->integer('s_bouritwo')->nullable();
              $table->integer('s_bouriratetwo')->nullable();
              $table->integer('s_bouritwototal')->nullable();
              $table->integer('s_thela')->nullable();
              $table->integer('s_thelarate')->nullable();
              $table->integer('s_thelatotal')->nullable();
              $table->integer('s_thelatwo')->nullable();
              $table->integer('s_thelatworate')->nullable();
              $table->integer('s_thelatwototal')->nullable();
              $table->integer('s_bwt')->nullable();
              $table->integer('s_ewt')->nullable();
              $table->integer('s_netwt')->nullable();
              $table->integer('s_rate')->nullable();
              $table->integer('s_totalamount')->nullable();
              $table->integer('s_barrs')->nullable();
              $table->integer('s_vrent')->nullable();
              $table->integer('s_netamount')->nullable();
              $table->integer('purchasenetamount')->nullable();
              $table->integer('salenetamount')->nullable();
              $table->integer('profit')->nullable();
              $table->integer('loss')->nullable();
              // difference
              $table->integer('firstwtdifference')->nullable();
              $table->integer('firstbouridifference')->nullable();
              $table->integer('firstbouriratedifference')->nullable();
              $table->integer('firstbouritotaldifference')->nullable();
              $table->integer('seconfbouridifference')->nullable();
              $table->integer('seconfbouriratedifference')->nullable();
              $table->integer('seconfbouritotaldifference')->nullable();
              $table->integer('firsttheladifference')->nullable();
              $table->integer('firstthelaratedifference')->nullable();
              $table->integer('firstthelatotaldifference')->nullable();
              $table->integer('secondtheladifference')->nullable();
              $table->integer('secondthelaratedifference')->nullable();
              $table->integer('secondthelatotaldifference')->nullable();
              $table->integer('wtdifference')->nullable();
              $table->integer('ewtdifference')->nullable();
              $table->integer('netewtdifference')->nullable();
              $table->integer('ratedifference')->nullable();
              $table->integer('totalamountdifference')->nullable();
              $table->integer('barrsdifference')->nullable();
              $table->integer('vrentdifference')->nullable();
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
        Schema::dropIfExists('pak_traders');
    }
};
