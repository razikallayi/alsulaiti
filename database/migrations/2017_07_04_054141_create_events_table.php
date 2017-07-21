<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');


            $table->string('title')->nullable();
            $table->text('content')->nullable(); 
            $table->string('image')->nullable(); 

            $table->string('title_ar')->nullable();
            $table->text('content_ar')->nullable();
            
            $table->timestamp('published_date')->nullable();
            $table->text('slug')->nullable();
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
        Schema::dropIfExists('events');
    }
}
