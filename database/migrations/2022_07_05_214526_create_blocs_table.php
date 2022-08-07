<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//protected $fillable=['designation','numero','longueur','largeur','hauteur','qualite','etat','date_entrer','heure_entrer','date_sortie','heure_sortie','machine_id'];

        Schema::create('blocs', function (Blueprint $table) {
            $table->id();
            $table->string('designation');
            $table->string('numero')->unique();
            $table->float('longueur');
            $table->float('largeur');
            $table->float('hauteur');
            $table->string('qualite');
            $table->string('etat');
            $table->date('date_entrer');
            $table->time('heure_entrer');
            $table->date('date_sortie');
            $table->time('heure_sortie');
            $table->unsignedBigInteger('machine_id');
            $table->foreign('machine_id')->references('id')->on('machines');
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
        Schema::dropIfExists('blocs');
    }
}
