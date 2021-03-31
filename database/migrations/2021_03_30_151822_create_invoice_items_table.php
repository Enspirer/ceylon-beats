<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('invoice_id');
            $table->text('music_id');
            $table->text('selected_license');
            $table->text('music_name');
            $table->text('price');
            $table->text('offer_available')->nullable();
            $table->text('offered_price')->nullable();
            $table->text('preview_link');
            $table->text('download_link');
            $table->text('author_name');
            $table->text('genres');
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
        Schema::dropIfExists('invoice_items');
    }
}
