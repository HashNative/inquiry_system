<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquiries', function (Blueprint $table) {
          
            $table->increments('id');
            $table->String('source');
            $table->longText('description');
            $table->String('name');
            $table->String('course_name');
            $table->String('status');
            $table->integer('phone_number');
            $table->String('title');
            $table->String('inquiry_by');
            $table->String('email');
            $table->String('follow_up');
            $table->dateTime('date_time');
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
        Schema::dropIfExists('inquiries');
    }
}
