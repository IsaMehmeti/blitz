<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('location')->nullable();
            $table->string('company_name')->nullable();
            $table->string('sex')->nullable();
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('addres')->nullable();
            $table->string('plz')->nullable();
            $table->string('ort')->nullable();
            $table->string('mobil')->nullable();
            $table->string('telefon')->nullable();
            $table->string('email')->nullable();
            $table->string('comment')->nullable();
            $table->string('date')->nullable();
            $table->string('agent_name')->nullable();
            $table->unsignedBigInteger('transmission_id')->nullable();
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
        Schema::dropIfExists('leads');
    }
}
