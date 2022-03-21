<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDelegueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delegue', function (Blueprint $table) {
            $table->id();
            $table->foreignId('etudiant')->constraint;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('delegue',function(Blueprint $table){
            
            $table->dropForeign('etudiant');

        });
        Schema::dropIfExists('delegue');
    }
}
