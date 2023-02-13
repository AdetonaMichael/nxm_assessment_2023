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
        Schema::create('products', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id')->nullable()->index('id');
            $table->string('sku')->nullable()->index('sku_at_idx');
            $table->string('name', 50)->nullable()->index('name_at_idx');
            $table->double('price')->nullable()->index('price_at_idx');

            $table->unique(['id'], 'id_at_idx');
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
};
