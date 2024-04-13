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
        Schema::create('clusters', function (Blueprint $table) {
            $table->id('idCluster');
            $table -> string('nom');
            $table -> unsignedBigInteger('filliere_id');
            $table -> unsignedBigInteger('village_id');
            $table ->foreign('filliere_id')->references('idFiliere')->on('filieres');
            $table ->foreign('village_id')->references('idVillage')->on('villages');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clusters');
    }
};
