<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('title');
			$table->string('site');
			$table->string('headline_btn')->nullable()->default('');
			$table->string('background_btn')->nullable()->default('');
			$table->string('color_gift_btn')->nullable()->default('');
			$table->string('headline_stap_one')->nullable()->default('');
			$table->string('background_stap_one')->nullable()->default('');
			$table->string('post_url_stap_one')->nullable()->default('');
			$table->string('text_btn_stap_one')->nullable()->default('');
			$table->string('color_btn_stap_one')->nullable()->default('');
			$table->boolean('is_done')->default(false);
			$table->bigInteger('user_id')->unsigned();
            $table->timestamps();
        });

		Schema::table('projects', function (Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_projects');
    }
}
