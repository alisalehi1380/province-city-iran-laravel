<?php

use App\Models\City;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up(): void
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string(City::NAME);
            $table->unsignedBigInteger(City::PROVINCE_ID);
            $table->foreignId(City::PROVINCE_ID)->constrained('provinces')->cascadeOnDelete();
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
