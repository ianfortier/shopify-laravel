<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopifySmartCollections extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopify_smart_collections', function (Blueprint $table) {
    			$table->increments('id');
    			$table->string('shop_id');
    			$table->string('smart_collection_id');
    			$table->string('title');
    			$table->string('handle');
    			$table->text('body_html');
    			$table->text('image')->nullable();
    			$table->text('rules');
    			$table->string('sort_order');
    			$table->string('published_scope');
    			$table->string('template_suffix');
    			$table->integer('products_manually_sorted_count');
          $table->boolean('disjunctive');
    			$table->datetimeTz('published_at');
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
        Schema::dropIfExists('shopify_smart_collections');
    }
}
