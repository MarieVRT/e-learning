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
        Schema::disableForeignKeyConstraints();
        Schema::create('question', function (Blueprint $table) {
            $table->id();
            $table->string('level');
            $table->longText('question');
            $table->longText('choice_1');
            $table->longText('choice_2');
            $table->longText('choice_3');
            $table->longText('choice_4');
            $table->longText('answer');
            $table->unsignedBigInteger('language_id');
            $table->foreign('language_id')
                ->references('id')
                ->on('language')
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
        Schema::dropIfExists('question');
    }
};
