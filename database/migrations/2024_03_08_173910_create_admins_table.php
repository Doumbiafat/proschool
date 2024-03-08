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
        Schema::create('admins', function (Blueprint $table) {
            $table->id(); // Identifiant unique de l'admin
            $table->unsignedBigInteger('id_admin'); // Clé étrangère vers la table "users"
            $table->foreign('id_admin')->references('id')->on('users')->onDelete('cascade');

            // Ajoutez d'autres colonnes si nécessaire
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
