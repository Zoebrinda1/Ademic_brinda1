<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmploidetempsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emploidetemps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('filiere_option_id')->constraint();
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
        Schema::table('emploidetemps',function(Blueprint $table){
            
            $table->dropForeign('filiere_option_id');
        });
        Schema::dropIfExists('emploidetemps');
    }
}
