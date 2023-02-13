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
        Schema::create('orders', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id')->nullable()->index('id');
            $table->string('invoice_number')->nullable()->index('invoice_number_at_idx');
            $table->integer('purchaser_id')->nullable()->index('purchaser_id');
            $table->date('order_date')->nullable()->index('order_date_at_idx');

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
        Schema::dropIfExists('orders');
    }
};
