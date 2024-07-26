<?php

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
        Schema::create('towns', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::table('routes', function(Blueprint $table){
            $table->foreignId('town_id')->nullable()->constrained()->onDelete('cascade');
        });

        Schema::table('stops', function (Blueprint $table){
            $table->foreignId('town_id')->nullable()->constrained()->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('routes', function(Blueprint $table){
            $table->dropForeign(['town_id']);
            $table->dropColumn('town_id');
        });

        Schema::table('stops', function(Blueprint $table){
            $table->dropForeign(['town_id']);
            $table->dropColumn('town_id');
        });

        Schema::dropIfExists('towns');
    }
};
