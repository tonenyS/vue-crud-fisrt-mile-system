<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConstarutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('constarutions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('building_id')->index();
            $table->string('surveyDesing')->nullable();
            $table->timestamp('surveyDesingTeam')->nullable();
            $table->timestamp('surveyDesingDate')->nullable();
            $table->timestamp('surveyDesingDateBy')->nullable();
            $table->bigInteger('surveyDesingBy')->index();
            $table->string('ifcc')->nullable();
            $table->bigInteger('ifccTeam')->index();
            $table->timestamp('ifccDate')->nullable();
            $table->string('wallBox')->nullable();
            $table->bigInteger('wallBoxTeam')->nullable();
            $table->timestamp('wallBoxDate')->nullable();
            $table->string('microductD')->nullable();
            $table->bigInteger('microductTeamD')->nullable();
            $table->timestamp('microductDateD')->nullable();
            $table->string('microductK')->nullable();
            $table->bigInteger('microductTeamK')->nullable();
            $table->timestamp('microductDateK')->nullable();
            $table->timestamps();

            // $table->foreign('building_id')
            // ->references('id')
            // ->on('buildings')
            // ->onDelete('cascade');
            // $table->foreign('surveyDesingBy')
            // ->references('id')
            // ->on('teams')
            // ->onDelete('cascade');
            // $table->foreign('ifccTeam')
            // ->references('id')
            // ->on('teams')
            // ->onDelete('cascade');
            // $table->foreign('wallBoxTeam')
            // ->references('id')
            // ->on('teams')
            // ->onDelete('cascade');
            // $table->foreign('microductTeamD')
            // ->references('id')
            // ->on('teams')
            // ->onDelete('cascade');
            // $table->foreign('microductTeamK')
            // ->references('id')
            // ->on('teams')
            // ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('constarutions');
    }
}