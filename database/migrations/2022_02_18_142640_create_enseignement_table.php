<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnseignementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enseignement', function (Blueprint $table) {
            $table->id();
            $table->foreignId('periode_id')->constraint;
            $table->foreignId('filiere_option_id')->constraint;
            $table->string('nom');
            $table->integer('credit');
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
        Schema::table('enseignement',function(Blueprint $table){
            $table->dropForeign('periode_id');
            $table->dropForeign('filiere_option_id');

        });
        Schema::dropIfExists('enseignement');
    }
}
