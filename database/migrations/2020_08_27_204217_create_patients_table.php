<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('pseudoname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('bornplace');
            $table->date('birthday');
            $table->string('gender');
            $table->string('adress');
            $table->string('phonenumber');
            $table->text('rapport')->default('');
            $table->boolean('confirmed')->default(0);
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
        Schema::dropIfExists('patients');
    }
}
