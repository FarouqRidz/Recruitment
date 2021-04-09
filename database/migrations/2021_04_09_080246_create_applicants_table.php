<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nric');
            $table->text('address');
            $table->string('phone_number');
            $table->string('gender');
            $table->string('race');
            $table->string('marital_status');
            $table->string('email');
            $table->string('notice_period')->nullable();
            $table->string('expected_salary')->nullable();
            $table->string('position_applied')->nullable();
            $table->string('salary_range')->nullable();
            $table->string('grade')->nullable();
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('checked_by');
            $table->unsignedBigInteger('status_id')->nullable();
            $table->string('availability')->nullable();
            $table->boolean('relocation')->nullable(); //null = will consider
            $table->boolean('can_travel')->default(false);
            $table->boolean('has_own_transport')->default(false);
            $table->string('driving_license')->nullable();
            $table->string('other_info')->nullable();
            $table->boolean('recommended')->default(false);
            $table->string('allowance')->nullable();
            $table->dateTime('hire_date')->nullable();
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
        Schema::dropIfExists('applicants');
    }
}
