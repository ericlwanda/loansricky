<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('clients', function (Blueprint $table) {
        $table->id();
        $table->string('firstname');
        $table->string('middlename');
        $table->string('lastname');
        $table->string('contactno');
        $table->string('address');
        $table->string('email')->unique();
        $table->string('tax_id');
        $table->string('location');
        $table->timestamp('date_created')->nullable();
        
    });
       

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('clients');
    }
}
