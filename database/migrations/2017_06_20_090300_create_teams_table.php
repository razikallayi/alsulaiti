<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');


            $table->string('name')->nullable();
            $table->string('designation')->nullable();
            $table->string('image')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('description')->nullable();
            $table->text('accomplishment')->nullable();
            $table->text('experience')->nullable();
            $table->text('qualification')->nullable();
            $table->text('why_recomended')->nullable();
            $table->text('countries')->nullable();

            //Arabic
            $table->string('name_ar')->nullable();
            $table->string('designation_ar')->nullable();
            $table->text('description_ar')->nullable();
            $table->text('accomplishment_ar')->nullable();
            $table->text('experience_ar')->nullable();
            $table->text('qualification_ar')->nullable();
            $table->text('why_recomended_ar')->nullable();
            
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
        Schema::dropIfExists('teams');
    }
}
