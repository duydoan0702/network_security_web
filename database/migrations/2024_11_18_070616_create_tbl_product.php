<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_product', function (Blueprint $table) {
            $table->increments('product_id'); 
            $table->string('product_name');  
            $table->string('product_slug');  
            $table->integer('category_id'); 
            $table->text('product_desc');   
            $table->text('product_content');
            $table->decimal('product_price', 10, 2); 
            $table->string('product_image'); 
            $table->integer('product_status'); 
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
        Schema::dropIfExists('tbl_product');
    }
};
