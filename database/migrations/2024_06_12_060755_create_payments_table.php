<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('userId');
            $table->string('title');
            $table->string('adminphone');
            $table->string('description');
            $table->string('batch');
            $table->date('deadline');
            $table->string('bank');
            $table->string('accountname');
            $table->string('accountno');
            $table->integer('amount');
            $table->integer('year');
            $table->string('state');
            $table->string('lga');
            $table->string('cdsgroup');
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('payments');
    }
}
