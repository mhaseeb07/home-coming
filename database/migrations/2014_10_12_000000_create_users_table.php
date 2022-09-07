<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('position')->default(0);
            $table->string('email')->unique();
            $table->string('reg_no')->unique()->nullable();
            $table->integer('role_status')->default(0);
            $table->integer('status')->default(1)->comment('0: In Active, 1: Active');
            $table->string('m_login_token')->nullable()->comment('Mobile Token');
            $table->timestamp('m_pass_reset_request')->nullable()->comment('Mobile Reset Request');
            $table->string('m_pass_reset_otp')->nullable()->comment('Mobile Reset Otp');
            $table->timestamp('last_login')->nullable();
            $table->timestamp('m_last_login')->nullable()->comment('Last Login Mobile');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
