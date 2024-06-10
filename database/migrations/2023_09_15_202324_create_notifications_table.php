<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('type')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('batch')->nullable();
            $table->string('time')->nullable();
            $table->string('cdsgroup')->nullable();
            $table->string('state')->nullable();
            $table->string('lga')->nullable();
            $table->integer('allow_admin')->default(1);
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
        Schema::dropIfExists('notifications');
    }
}
