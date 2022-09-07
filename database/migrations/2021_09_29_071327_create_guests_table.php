<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('cnic')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('relation')->nullable();
            $table->integer('position')->default(0);
            $table->integer('amount')->default(0);
            $table->string('pass_id')->nullable();
            $table->string('voucher_image')->nullable();
            $table->string('vaccination_certificate')->nullable();
            $table->integer('vaccination_status')->default(0)->comment('0: Not Vaccinated, 1: Partially Vaccinated, 2: Fully Vaccinated');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('seat_id')->nullable();
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('seat_id')->references('id')->on('seats')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guests');
    }
}
