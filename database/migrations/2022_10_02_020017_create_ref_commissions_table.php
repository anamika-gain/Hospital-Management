<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefCommissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_commissions', function (Blueprint $table) {
            $table->id();
            $table->string('referral_id')->constrained('users')->cascadeOnDelete();
            $table->string('billing_id')->constrained('billings')->cascadeOnDelete();
            $table->string('date')->nullable();
            $table->decimal('amount',$precision = 8, $scale = 2);
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
        Schema::dropIfExists('ref_commissions');
    }
}
