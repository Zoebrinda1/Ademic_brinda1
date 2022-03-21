<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiliereOptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filiere_option', function (Blueprint $table) {
            $table->id();
            $table->foreignId('classes_id')->constraint();
            $table->integer('niveau');
            $table->string('nom_filiere');
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
        Schema::table('filiere_option',function(Blueprint $table){
            
            $table->dropForeign('classes_id');
        });
        Schema::dropIfExists('filiere_option');
    }
}
