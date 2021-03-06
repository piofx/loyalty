<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRewardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rewards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('agency_id')->nullable();
            $table->bigInteger('client_id')->nullable();
            $table->unsignedBigInteger('customer_id');
            $table->text('phone');
            $table->bigInteger('credits')->nullable()->default(0);
            $table->bigInteger('redeem')->nullable()->default(0);
            $table->timestamps();
            $table->foreign('customer_id')->references('id')->on("customers")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reward');
    }
}
