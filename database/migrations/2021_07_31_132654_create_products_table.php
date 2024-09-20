<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('productName');
            $table->string('type');
            $table->integer('company_id');
            $table->decimal('price')->nullable();
            $table->decimal('weight')->nullable();
            $table->string('salesPlace')->nullable();
            $table->string('productionDate')->nullable();
            $table->string('expireDate')->nullable();
            $table->integer('view');
            $table->string('productImage');
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('products');
    }
}
