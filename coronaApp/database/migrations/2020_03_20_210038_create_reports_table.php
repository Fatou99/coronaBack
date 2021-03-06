<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments("id");
            $table->float("longitude");
            $table->float("latitude");
            $table->string("type");
            $table->longText("urlToImage");
            $table->string("time");
            $table->boolean("affichage")->default(true);
            $table->string("description")->nullable();
            $table->string("gouvernorat");
            $table->string("delegation");
            $table->timestamp("created_at")->nullable();
            $table->timestamp("updated_at")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
