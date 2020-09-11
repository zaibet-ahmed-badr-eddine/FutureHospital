<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRdvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rdvs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('pseudoname');
            $table->string('gender');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('bornplace');
            $table->date('birthday');
            $table->string('adress');
            $table->string('phonenumber');
            $table->string('medcin')->default('');
            $table->date('rdv_date')->default('2015-01-30');
            $table->boolean('confirmed')->default(0);
            //$table->string('upload_file');


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
        Schema::dropIfExists('rdvs');
    }
}
