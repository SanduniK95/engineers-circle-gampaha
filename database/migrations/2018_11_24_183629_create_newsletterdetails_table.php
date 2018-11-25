<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsletterdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsletterdetails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject');
            $table->string('receptionistName');
            $table->string('receptionistemail');
            $table->string('content');
            $table->string('senderName');
            $table->string('senderEmail');
            $table->string('img');
            $table->string('img_caption');
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
        Schema::dropIfExists('newsletterdetails');
    }
}
