<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvisionalClaimDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provisional_claim_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('index_table_id');
            $table->foreign('index_table_id')
                ->references('id')->on('index_tables')
                ->onDelete('cascade');
            $table->string('status')->nullable();
            $table->date('pprovisional_letter_date')->nullable();
            $table->string('claim_due')->nullable();
            $table->string('claim_status')->nullable();
            $table->string('claim_received')->nullable();
            $table->date('claim_date')->nullable();
            $table->string('reason')->nullable();
            $table->string('cfe_fee')->nullable();
            $table->string('recovery_from_student')->nullable();
            
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
        Schema::table('provisional_claim_details', function(Blueprint $table) {
            $table->dropForeign(['index_table_id']);
        });
        Schema::dropIfExists('provisional_claim_details');
    }
}
