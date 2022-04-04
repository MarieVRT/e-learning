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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 255);
            $table->string('lastname',255);
            $table->string('email')->unique();
            $table->string('role')->default('ROLE_LEARNER');
            $table->string('password');
            $table->rememberToken();
            $table->unsignedBigInteger('advancement_id')->nullable();
            $table->foreign('advancement_id')
                ->references('id')
                ->on('advancement')
                ->onDelete('restrict')
                ->onUpdate('restrict');
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
        Schema::dropIfExists('users');
    }
};
