<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->integer('id', true);
            $table->float('ulica')->nullable();
            $table->float('dom')->nullable();
            $table->float('teplica')->nullable();
            $table->float('set_dom')->nullable();
            $table->float('set_teplica')->nullable();

            $table->float('obratka')->nullable();
            $table->timestamps();
            $table->integer('cat_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
