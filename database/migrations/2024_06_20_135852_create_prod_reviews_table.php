<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prod_reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('product', 100);
            $table->text('description');
            $table->integer('rating');
            $table->timestamps(); // This will create `created_at` and `updated_at` columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prod_reviews');
    }
}

