<?php

use App\Models\Location;
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
        Schema::create('', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
            
        });
        $locations = ['Mare', 'Montagna', 'Lago', 'Citta', 'Neve', 'Deserto', 'Campagna'];
        foreach($locations as $location){
            Location::create([
                'name' => $location
            ]);
        }
    }

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('locations');
    }
};
