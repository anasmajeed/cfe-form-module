<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('afs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('index_table_id');
            $table->foreign('index_table_id')
                ->references('id')->on('index_tables')
                ->onDelete('cascade');
            
            $table->string('course_applied_in')->nullable();
            $table->string('course_enrolled_in')->nullable();
            $table->string('Course_Registered_in')->nullable();
            $table->string('roll_no')->nullable();
            $table->string('affiliated_body')->nullable();
            $table->string('duration_of_course')->nullable();
            $table->date('admission_date')->nullable();
            $table->date('ending_date')->nullable();
            $table->string('academic_term')->nullable();
            $table->string('shift')->nullable();
            $table->string('registration_status')->nullable();
            $table->date('registration_date')->nullable();
            $table->string('actual_fee')->nullable();
            $table->string('late_fee')->nullable();
            $table->string('total_fee')->nullable();
            
            
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
        Schema::table('afs', function(Blueprint $table) {
            $table->dropForeign(['index_table_id']);
        });
        Schema::dropIfExists('afs');
    }
}
