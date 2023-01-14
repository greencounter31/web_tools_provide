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
        Schema::create('closed_reports', function (Blueprint $table) {
            $table->id();
            $table->string('item_name')->nullable();
            $table->string('item_type')->nullable();
            $table->double('price')->nullable();
            $table->dateTime('report_time')->nullable();
            $table->tinyInteger('status')->default(1)->comment('0 = Pending; 1 = Completed');
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
        Schema::dropIfExists('closed_reports');
    }
};
