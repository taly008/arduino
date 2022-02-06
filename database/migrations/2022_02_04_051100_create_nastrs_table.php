<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNastrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nastrs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->float('ulica');
            $table->float('dom');
            $table->float('teplica');
            $table->float('set_dom');
            $table->float('set_teplica');
            $table->float('obratka');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nastrs');
    }
}
