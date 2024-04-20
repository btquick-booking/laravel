<?php

use App\Models\Bus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('Starting_place');
            $table->string('Destination_place');
            $table->date('date');
            $table->time('starting_time');
            $table->time('Access_time');
            $table->string('Driver_name');
         //   $table->integer('Number_of_seat');
            $table->integer('Trip_price');
            $table->text('Details');
            $table->foreignIdFor(Bus::class)->constrained();



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
