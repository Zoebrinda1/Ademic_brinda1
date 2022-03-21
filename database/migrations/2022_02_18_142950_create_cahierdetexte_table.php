<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCahierdetexteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cahierdetexte', function (Blueprint $table) {
            $table->id();
            $table->string('contenu');
            $table->string('piece_jointe');
            $table->string('signature_enseignant');
            $table->foreignId('enseignement_id')->constraint();
            $table->foreignId('filiere_option_id')->constraint();
            $table->foreignId('devoirs_id')->constraint();
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
        Schema::table('cahierdetexte',function(Blueprint $table){
            
            $table->dropForeign('enseignement_id');
            $table->dropForeign('filiere_option_id');
            $table->dropForeign('devoirs_id');

        });
        Schema::dropIfExists('cahierdetexte');
    }
}
