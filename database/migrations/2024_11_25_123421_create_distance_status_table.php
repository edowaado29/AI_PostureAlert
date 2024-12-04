<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('distance_status', function (Blueprint $table) {
            $table->id();
            $table->float('distance', 8, 2); // Example: 8 total digits, 2 after the decimal point
            $table->string('status', 50);
            $table->timestamp('timestamp')->useCurrent();
        });
    }

    public function down()
    {
        Schema::dropIfExists('distance_status');
    }
};
