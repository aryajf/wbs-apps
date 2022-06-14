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
        Schema::create('wbs', function (Blueprint $table) {
            $table->id();
            $table->integer('site_id');
            $table->string('site_name');
            $table->string('project_budget');
            $table->string('regional');
            $table->string('site_type');
            $table->string('survey_date');
            $table->string('consultant');
            $table->string('cons_pic_name');
            $table->string('tower');
            $table->string('tower_height');
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
        Schema::dropIfExists('wbs');
    }
};
