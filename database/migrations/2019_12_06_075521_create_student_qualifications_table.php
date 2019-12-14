<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentQualificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_qualifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('qualification_id')->unsigned()->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->string('subject_name');
            $table->string('grade');
            $table->string('score');
            $table->timestamps();

            $table->foreign('qualification_id')->references('id')->on('qualifications');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_qualifications');
    }
}
