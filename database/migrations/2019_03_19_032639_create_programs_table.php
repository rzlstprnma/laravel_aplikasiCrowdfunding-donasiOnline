<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('users_id');
            $table->integer('category_id');
            $table->string('title', 100);
            $table->string('photo', 200);
            $table->string('brief_explanation', 200);
            $table->integer('donation_target');
            $table->date('time_is_up');
            $table->string('shelter_account_number', 45);
            $table->integer('donation_collected');
            $table->text('description');
            $table->tinyInteger('isPublished')->default(0);
            $table->tinyInteger('isSelected')->default(0);
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
        Schema::dropIfExists('programs');
    }
}
