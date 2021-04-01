<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanTakenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_taken', function (Blueprint $table) {
            $table->id('loan_id');
            $table->string('loan_type_id');
            $table->string('plan_id');
            $table->string('client_id');
            $table->string('lo_id');
            $table->string('branch');
            $table->string('amount_taken');
            $table->string('amount_payable');
            $table->string('date_taken');
            $table->string('date_due');
            $table->string('status');
            $table->string('monthly');
            $table->string('pen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loan_taken');
    }
}
