<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferralPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referral_payments', function (Blueprint $table) {
            $table->id();
            $table->integer('invoice_id')->constrained('ref_commissions')->cascadeOnDelete();
            $table->decimal('amount',$precision = 8, $scale = 2);
            $table->string('pay_method');
            $table->string('transaction_id')->nullable();
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
        Schema::dropIfExists('referral_payments');
    }
}
