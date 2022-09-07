<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEligiblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eligibles', function (Blueprint $table) {
            $table->id();
            $table->string('reg_no')->unique();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('cnic')->unique()->nullable();
            $table->string('contact_no_residence')->nullable();
            $table->string('cell_no')->nullable();
            $table->string('degree_name')->nullable();
            $table->string('passout_session')->nullable();
            $table->string('passout_year')->nullable();
            $table->string('student_id_erp')->nullable();
            $table->string('campus_id')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_cnic')->nullable();
            $table->string('address')->nullable();
            $table->string('name_of_institution')->nullable();
            $table->string('designation')->nullable();
            $table->string('voucher_image')->nullable();
            $table->boolean('status')->default(0)->comment('0: Draft, 1: Active');
            $table->integer('amount')->default(0);
            $table->string('pass_id')->nullable();
            $table->string('vaccination_certificate')->nullable();
            $table->integer('vaccination_status')->default(0)->comment('0: Not Vaccinated, 1: Partially Vaccinated, 2: Fully Vaccinated');
            $table->unsignedBigInteger('eligible_type_id')->nullable();
            $table->unsignedBigInteger('medal_id')->nullable();
            $table->unsignedBigInteger('seat_id')->nullable();
            $table->unsignedBigInteger('session_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps();

            $table->foreign('eligible_type_id')->references('id')->on('eligible_types')->onDelete('cascade');
            $table->foreign('medal_id')->references('id')->on('medals')->onDelete('cascade');
            $table->foreign('seat_id')->references('id')->on('seats')->onDelete('cascade');
            $table->foreign('session_id')->references('id')->on('convocation_sessions')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('eligibles');
    }
}
