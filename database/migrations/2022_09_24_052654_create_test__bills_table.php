<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test__bills', function (Blueprint $table) {
            $table->id();
            $table->integer('bill_id')->constrained('billings')->cascadeOnDelete();
            $table->string('test_name');
            $table->decimal('price',$precision = 8, $scale = 2);
            $table->decimal('ref_commission',$precision = 8, $scale = 2);
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
        Schema::dropIfExists('test__bills');
    }
}
