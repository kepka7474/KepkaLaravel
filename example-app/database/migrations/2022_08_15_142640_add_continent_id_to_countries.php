<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddContinentIdToCountries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('countries', function (Blueprint $table) {
            $table->dropColumn('continent_name');

            $table->unsignedBigInteger('continent_id');

            $table->foreign('continent_id')
                ->references('id')
                ->on('continents')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('countries', function (Blueprint $table) {

            $table->string('continent_name');

            $table->dropForeign('continent_id');

            $table->dropColumn('continent_id');
        });
    }
}
