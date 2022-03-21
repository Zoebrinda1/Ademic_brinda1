<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnseignantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enseignant', function (Blueprint $table) {
            $table->id();
            $table->foreignId('statut_id')->constraint();
            $table->string('nom',100);
            $table->string('prenom',100);
            $table->string('email')->unique();
            $table->string('motdepasse');
            $table->integer('telephone');
            $table->string('sexe');
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
        Schema::table('enseignant',function(Blueprint $table){
            $table->dropForeign('statut_id');
        });
        Schema::dropIfExists('enseignant');
    }
}
