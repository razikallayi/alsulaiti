<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insights', function (Blueprint $table) {
            $table->increments('id');

            $table->text('title')->nullable();
            $table->integer('author_id')->nullable();
            $table->text('content')->nullable(); 
            $table->string('image')->nullable(); 

            $table->text('title_ar')->nullable();
            $table->text('content_ar')->nullable();
            
            $table->text('slug')->nullable();
            $table->integer('listing_order')->nullable();
            $table->boolean('is_published')->default(true);
            $table->timestamp('published_date')->nullable();

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
        Schema::dropIfExists('insights');
    }
}
