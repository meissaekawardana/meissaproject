<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuktiBayarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukti_bayars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('namaPenerima');
            $table->longText('alamatTujuan');
            $table->integer('noHp');
            $table->integer('totalTagihan');
            $table->string('fotoBukti')->nullable();
            $table->boolean('status');
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
        Schema::dropIfExists('bukti_bayars');
    }
}
