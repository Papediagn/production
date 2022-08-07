<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //    protected $fillable =['long','larg','epaisseur','qunatite','observation','qualite','bloc_id'];

        Schema::create('tranches', function (Blueprint $table) {
            $table->id();
            $table->float('long');
            $table->float('larg');
            $table->float('epaisseur');
            $table->integer('quantite');
            $table->string('observation');
            $table->unsignedBigInteger('bloc_id');
            $table->foreign('bloc_id')->references('id')->on('blocs');
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
        Schema::dropIfExists('tranches');
    }
}
