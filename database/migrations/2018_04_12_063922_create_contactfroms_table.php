<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactfromsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactfroms', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('Name', 60);
            $table->string('Title',255);
            $table->string('Company',100);
            $table->string('Email', 60);
            $table->string('Phone', 15);
            $table->string('Subject');
            $table->string('Message');
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
        Schema::dropIfExists('contactfroms');
    }
}
