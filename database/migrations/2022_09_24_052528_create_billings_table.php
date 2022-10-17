<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billings', function (Blueprint $table) {
            $table->id();
            $table->string('patient_id');
            $table->string('doctor_id');
            $table->string('referral_id');
            $table->string('delivery_date')->nullable();
            $table->string('invoice_date')->nullable();
            $table->decimal('total_amount',$precision = 8, $scale = 2);
            $table->decimal('discount',$precision = 8, $scale = 2)->nullable();
            $table->string('dis_by')->nullable();
            $table->string('pay')->nullable();
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
        Schema::dropIfExists('billings');
    }
}
