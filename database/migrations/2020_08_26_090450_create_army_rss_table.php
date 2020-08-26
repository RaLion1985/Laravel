<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArmyRssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('army_rss', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('title')->comment('Заголовок');
                $table->string('link')->comment('Ссылка');
                $table->text('description')->comment('Описание новости');
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
        Schema::dropIfExists('army_rss');

    }
}
