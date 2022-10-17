<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collections', function (Blueprint $table) {
            $table->id();
            $table->integer('bill_id');
            $table->integer('user_id');
            $table->string('pay_amount');
            $table->string('due_amount');
            $table->string('discount');
            $table->string('date')->nullable();
            $table->string('method')->nullable();
            $table->integer('patient_id');
            $table->integer('transaction_id')->nullable();
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
        Schema::dropIfExists('collections');
    }
}
