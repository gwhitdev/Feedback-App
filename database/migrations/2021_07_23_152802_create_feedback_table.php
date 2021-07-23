<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title',100);
            $table->string('detail',255);
            $table->integer('votes')->unsigned()->default(0);
            $table->integer('count_comments')->unsigned()->default(0);
            $table->boolean('removed')->default(false);
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('status_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feedback');
    }
}
