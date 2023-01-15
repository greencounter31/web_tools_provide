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
        Schema::create('cpanels', function (Blueprint $table) {
            $table->id();
            $table->string('cpanel')->nullable();
            $table->string('hosting')->nullable();
            $table->string('user_name')->nullable();
            $table->string('password')->nullable();
            $table->tinyInteger('source')->nullable();
            $table->string('country')->nullable();
            $table->string('seo_rank')->nullable();
            $table->float('price')->nullable();
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('cpanels');
    }
};
