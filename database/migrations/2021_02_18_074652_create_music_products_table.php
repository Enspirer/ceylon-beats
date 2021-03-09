<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('music_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('music_name');
            $table->text('price');
            $table->text('description')->nullable();
            $table->text('genres_id');
            $table->text('tags')->nullable();
            $table->text('duration');
            $table->text('instrument')->nullable();
            $table->text('bmp');
            $table->text('tempo');
            $table->text('preview_link');
            $table->text('download_link');
            $table->text('author_name');
            $table->text('user_id');
            $table->text('is_features');
            $table->text('music_art')->nullable();
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
        Schema::dropIfExists('music_products');
    }
}
