<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->string('trading_name')->nullable();
            $table->string('company_name')->nullable();
            $table->string('abn')->nullable();
            $table->string('street_address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('post_code')->nullable();
            $table->string('primary_contact_name')->nullable();
            $table->string('primary_contact_phone_number')->nullable();
            $table->string('primary_contact_email')->nullable();
            $table->string('secondary_contact_name')->nullable();
            $table->string('secondary_contact_phone_number')->nullable();
            $table->string('secondary_contact_email')->nullable();
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
        Schema::dropIfExists('providers');
    }
}
