<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecondaryRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secondary_replies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('detail')->nullable(false);
            $table->bigInteger('user_id')->unsigned()->nullable(false);
            $table->bigInteger('reply_id')->unsigned()->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('secondary_replies');
    }
}
