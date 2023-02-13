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
        Schema::create('users', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id', true)->index('id');
            $table->string('first_name', 50)->nullable()->index('first_name_at_idx');
            $table->string('last_name', 50)->nullable()->index('last_name_at_idx');
            $table->string('username', 50)->nullable()->index('username_at_idx');
            $table->integer('referred_by')->nullable()->index('referred_by_at_idx');
            $table->date('enrolled_date')->nullable()->index('enrolled_date_at_idx');

            $table->unique(['id'], 'id_at_idx');
            $table->primary(['id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
