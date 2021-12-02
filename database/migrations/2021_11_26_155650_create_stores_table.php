<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->unique();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('src_logo')->nullable();
            $table->integer('numRating');
            $table->double('avgRating');
            $table->foreignId('categories_id')->constrained('categories');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stors');
    }
}
