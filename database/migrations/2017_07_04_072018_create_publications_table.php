<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('publications', function (Blueprint $table) {
          $table->increments('id');
          $table->string('title',2500)->nullable();
          $table->text('description');
          $table->string('image')->nullable();
          $table->string('pdf')->nullable();
          $table->string('slug',3000)->nullable();

      //Arabic
          $table->string('title_ar',2500)->nullable();
          $table->text('description_ar')->nullable();
          
          $table->integer('listing_order')->nullable();
          $table->boolean('is_published')->default(true);

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
        Schema::dropIfExists('publications');
    }
}
