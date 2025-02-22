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
        Schema::create('table_produits', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('prix', 8, 3);
            $table->integer('qtt_piece_in_carton');
            $table->integer('qtt');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_produits');
    }
};
