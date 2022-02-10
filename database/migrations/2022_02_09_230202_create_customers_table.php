<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('location')->nullable();
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('company_name')->nullable();
            $table->string('sex')->nullable();
            $table->string('email')->nullable();
            $table->string('mobil')->nullable();
            $table->string('addres')->nullable();
            $table->string('plz')->nullable();
            $table->string('ort')->nullable();
            $table->string('created_by_agent')->nullable();
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
        Schema::dropIfExists('customers');
    }
}
