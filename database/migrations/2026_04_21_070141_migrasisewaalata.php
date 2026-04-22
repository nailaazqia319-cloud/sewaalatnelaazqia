<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // ================= USERS =================
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('username')->unique();
            $table->string('password');
            $table->enum('role', ['admin', 'petugas']);
            $table->timestamps();
        });

        // ================= PENYEWA =================
        Schema::create('penyewas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('username')->unique();
            $table->string('hp')->nullable();
            $table->string('password');
            $table->timestamps();
        });

        // ================= MASTER =================
        Schema::create('kategoris', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->timestamps();
        });

        Schema::create('merks', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->timestamps();
        });

        Schema::create('kondisis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->timestamps();
        });

        // ================= ALAT =================
        Schema::create('alats', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->foreignId('kategori_id')->constrained('kategoris')->cascadeOnDelete();
            $table->foreignId('merk_id')->constrained('merks')->cascadeOnDelete();
            $table->foreignId('kondisi_id')->constrained('kondisis')->cascadeOnDelete();
            $table->integer('stok')->default(0);
            $table->integer('harga_sewa');
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });

        // ================= DENDA =================
        Schema::create('dendas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('jumlah');
            $table->timestamps();
        });

        // ================= ARTIKEL =================
        Schema::create('artikels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('kategori_id')->nullable()->constrained('kategoris')->nullOnDelete();

            $table->string('judul');
            $table->string('slug')->unique();
            $table->string('gambar')->nullable();
            $table->text('isi');
            $table->string('tag')->nullable();

            $table->timestamps();
        });

        // ================= KOMENTAR =================
        Schema::create('komentars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('artikel_id')->constrained('artikels')->cascadeOnDelete();
            $table->foreignId('penyewa_id')->constrained('penyewas')->cascadeOnDelete();
            $table->text('isi');
            $table->timestamps();
        });

        // ================= PEMESANAN =================
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('penyewa_id')->constrained('penyewas')->cascadeOnDelete();
            $table->date('tanggal_pesan');
            $table->date('tanggal_kembali');
            $table->integer('total')->default(0);
            $table->enum('status', ['pending', 'disetujui', 'selesai'])->default('pending');
            $table->timestamps();
        });

        // ================= DETAIL =================
        Schema::create('detail_pemesanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pemesanan_id')->constrained('pemesanans')->cascadeOnDelete();
            $table->foreignId('alat_id')->constrained('alats')->cascadeOnDelete();
            $table->foreignId('denda_id')->nullable()->constrained('dendas')->nullOnDelete();
            $table->integer('jumlah');
            $table->integer('harga');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('detail_pemesanans');
        Schema::dropIfExists('pemesanans');
        Schema::dropIfExists('komentars');
        Schema::dropIfExists('artikels');
        Schema::dropIfExists('dendas');
        Schema::dropIfExists('alats');
        Schema::dropIfExists('kondisis');
        Schema::dropIfExists('merks');
        Schema::dropIfExists('kategoris');
        Schema::dropIfExists('penyewas');
        Schema::dropIfExists('users');
    }
};