<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('survey.database.tables.questions'), function (Blueprint $table) {
            $table->id();
            $table->foreignId('survey_id')->nullable()->constrained();
            $table->foreignId('section_id')->nullable()->constrained();
            $table->json('content');
            $table->string('type')->default('text');
            $table->json('options')->nullable();
            $table->json('rules')->nullable();
            $table->integer('order');
            $table->timestamps();

            $table->index('survey_id');
            $table->index('section_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(config('survey.database.tables.questions'));
    }
};
