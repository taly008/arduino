<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnsToNastrs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nastrs', function (Blueprint $table) {
            $table->integer('id')->change();
            $table->float('ulica')->nullable()->change();
            $table->float('dom')->nullable()->change();
            $table->float('teplica')->nullable()->change();
            $table->float('set_dom')->nullable()->change();
            $table->float('set_teplica')->nullable()->change();
            $table->float('obratka')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nastrs', function (Blueprint $table) {
            //
        });
    }
}
