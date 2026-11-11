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
        Schema::create('barang_masuks', function (Blueprint $table) {
            $table->id();
            $table->string('kode_transaksi')->unique();
            $table->string('tipe_transaksi');
          $table->foreignId('nama_kategori')->constrained('kategoris')->onDelete('cascade');
            $table->foreignId('nama_supplier')->constrained('suppliers')->onDelete('cascade');
            $table->foreignId('nama_unit')->constrained('units')->onDelete('cascade');$table->integer('jumlah_masuk');
            $table->decimal('harga_beli', 10, 2);
            $table->decimal('harga_jual', 10, 2);
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_masuks');
    }
};
