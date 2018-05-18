<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacancypostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancyposts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vname');
            $table->string('vpost');
            $table->text('vbimage');
            /*$table->string('vlevel');
            $table->string('vlocation');
            $table->string('veducation');
            $table->text('vlogo');
            $table->string('vemail');
            $table->string('vphone');
            $table->string('vavailability');
            $table->string('voffsal');
            $table->string('vexperience');
            $table->text('vvideo');
            $table->string('vopening');
            $table->string('vgender');
            $table->date('vdeadline');
            $table->string('vabout');
            $table->string('vjobdescription');
            $table->string('vjobspecification');*/
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
        Schema::dropIfExists('vacancyposts');
    }
}
