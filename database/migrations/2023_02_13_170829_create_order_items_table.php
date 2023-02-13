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
        Schema::create('order_items', function (Blueprint $table) {
            $table->comment('');
            $table->integer('order_id')->nullable()->index('order_id_at_idx');
            $table->integer('product_id')->nullable()->index('product_id_at_idx');
            $table->integer('quantity')->nullable()->index('qantity_at_idx');

            $table->index(['order_id'], 'order_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_items');
    }
};
