<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiches', function (Blueprint $table) {
            $table->id();
            // $table->integer('numero_enreg')->unique();
            $table->timestamp('date_arrivee');
            $table->string('nom_exp');
            $table->string('prenom_exp');
            $table->string('sp_instructions')->nullable();
            $table->string('dir_instructions')->nullable();
            $table->string('autres_instructions')->nullable();
            $table->boolean('decision')->nullable();
            $table->string('proposition')->nullable();
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
        Schema::dropIfExists('fiches');
    }
}
