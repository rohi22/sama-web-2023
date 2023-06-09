<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBecomeAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('become_agents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('company');
            $table->string('phone');
            $table->string('email');
            $table->string('country');
            $table->string('city');
            $table->string('become_agent');
            $table->string('other_company')->default(null);
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
        Schema::dropIfExists('become_agents');
    }
}
