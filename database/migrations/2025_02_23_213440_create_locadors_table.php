<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locadors', function (Blueprint $table) {
            $table->id();
            $table->string('store_name');
            $table->string('city');
            $table->string('cep');
            $table->string('road');
            $table->string('neighborhood');
            $table->string('state');
            $table->string('number');
            $table->foreignId("user_id")->constrained()->onDelete('cascade');;
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
        Schema::dropIfExists('locadors');
    }
};
