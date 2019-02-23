<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles_skills', function (Blueprint $table) {
            $table->unsignedInteger('profile_id');
            $table->unsignedInteger('skill_id');

            $table->foreign('profile_id', 'profiles_skills_fk1')->references('id')->on('profiles')->onDelete('NO ACTION
')->onUpdate('NO ACTION');
            $table->foreign('skill_id', 'profiles_skills_fk2')->references('id')->on('skills')->onDelete('NO ACTION
')->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profilles_skills');
    }
}
