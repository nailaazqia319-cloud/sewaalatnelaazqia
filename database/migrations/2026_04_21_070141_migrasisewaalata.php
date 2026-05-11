<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // ================= USER =================
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('username')->unique();
            $table->string('password');
            $table->enum('role', ['admin', 'petugas']);
            $table->timestamps();
        });

        // ================= PENYEWA =================
        Schema::create('penyewa', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('username')->unique();
            $table->string('hp')->nullable();
            $table->string('password');
            $table->timestamps();
        });

        // ================= KATEGORI =================
        Schema::create('kategori', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->timestamps();
        });

        // ================= MERK =================
        Schema::create('merk', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->timestamps();
        });

        // ================= KONDISI =================
        Schema::create('kondisi', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->timestamps();
        });

        // ================= ALAT =================
        Schema::create('alat', function (Blueprint $table) {
            $table->id();
            $table->string('nama');

            $table->foreignId('kategori_id')
                ->constrained('kategori')
                ->cascadeOnDelete();

            $table->foreignId('merk_id')
                ->constrained('merk')
                ->cascadeOnDelete();

            $table->foreignId('kondisi_id')
                ->constrained('kondisi')
                ->cascadeOnDelete();

            $table->integer('stok')->default(0);
            $table->integer('harga_sewa');
            $table->text('deskripsi')->nullable();

            $table->timestamps();
        });

        // ================= DENDA =================
        Schema::create('denda', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('jumlah');
            $table->timestamps();
        });

        // ================= ARTIKEL =================
        Schema::create('artikel', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->constrained('user')
                ->cascadeOnDelete();

            $table->foreignId('kategori_id')
                ->nullable()
                ->constrained('kategori')
                ->nullOnDelete();

            $table->string('judul');
            $table->string('slug')->unique();
            $table->string('gambar')->nullable();
            $table->text('isi');
            $table->string('tag')->nullable();

            $table->timestamps();
        });

        // ================= KOMENTAR =================
        Schema::create('komentar', function (Blueprint $table) {
            $table->id();

            $table->foreignId('artikel_id')
                ->constrained('artikel')
                ->cascadeOnDelete();

            $table->foreignId('penyewa_id')
                ->constrained('penyewa')
                ->cascadeOnDelete();

            $table->text('isi');

            $table->timestamps();
        });

        // ================= PEMESANAN =================
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->constrained('user')
                ->cascadeOnDelete();

            $table->foreignId('penyewa_id')
                ->constrained('penyewa')
                ->cascadeOnDelete();

            $table->date('tanggal_pesan');
            $table->date('tanggal_kembali');

            $table->integer('total')->default(0);

            $table->enum('status', [
                'pending',
                'disetujui',
                'selesai'
            ])->default('pending');

            $table->timestamps();
        });

        // ================= DETAIL PEMESANAN =================
        Schema::create('detail_pemesanan', function (Blueprint $table) {
            $table->id();

            $table->foreignId('pemesanan_id')
                ->constrained('pemesanan')
                ->cascadeOnDelete();

            $table->foreignId('alat_id')
                ->constrained('alat')
                ->cascadeOnDelete();

            $table->foreignId('denda_id')
                ->nullable()
                ->constrained('denda')
                ->nullOnDelete();

            $table->integer('jumlah');
            $table->integer('harga');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('detail_pemesanan');
        Schema::dropIfExists('pemesanan');
        Schema::dropIfExists('komentar');
        Schema::dropIfExists('artikel');
        Schema::dropIfExists('denda');
        Schema::dropIfExists('alat');
        Schema::dropIfExists('kondisi');
        Schema::dropIfExists('merk');
        Schema::dropIfExists('kategori');
        Schema::dropIfExists('penyewa');
        Schema::dropIfExists('user');
    }
};