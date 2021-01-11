<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_offices', function (Blueprint $table) {
            $table->increments();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('patronymic');
            $table->string('login');
            $table->string('parol');
            $table->string('chair');
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
        Schema::dropIfExists('my_offices');
    }
}
