<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class SeederSewaAlatNaila extends Seeder
{
    public function run(): void
    {
        // ================= USER =================
        DB::table('user')->insert([
            [
                'nama' => 'Admin',
                'username' => 'admin',
                'password' => Hash::make('123'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Petugas',
                'username' => 'petugas',
                'password' => Hash::make('123'),
                'role' => 'petugas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // ================= PENYEWA =================
        DB::table('penyewa')->insert([
            [
                'nama' => 'Budi',
                'username' => 'budi',
                'hp' => '08123456789',
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Siti',
                'username' => 'siti',
                'hp' => '08129876543',
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // ================= KATEGORI =================
        DB::table('kategori')->insert([
            ['nama' => 'Outdoor'],
            ['nama' => 'Elektronik'],
        ]);

        // ================= MERK =================
        DB::table('merk')->insert([
            ['nama' => 'Canon'],
            ['nama' => 'Eiger'],
        ]);

        // ================= KONDISI =================
        DB::table('kondisi')->insert([
            ['nama' => 'Baru'],
            ['nama' => 'Bekas'],
        ]);

        // ================= ALAT =================
        DB::table('alat')->insert([
            [
                'nama' => 'Kamera Canon',
                'kategori_id' => 2,
                'merk_id' => 1,
                'kondisi_id' => 1,
                'stok' => 10,
                'harga_sewa' => 100000,
                'deskripsi' => 'Kamera bagus',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Tenda Eiger',
                'kategori_id' => 1,
                'merk_id' => 2,
                'kondisi_id' => 2,
                'stok' => 5,
                'harga_sewa' => 200000,
                'deskripsi' => 'Tenda kuat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // ================= DENDA =================
        DB::table('denda')->insert([
            [
                'nama' => 'Telat',
                'jumlah' => 50000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // ================= ARTIKEL =================
        DB::table('artikel')->insert([
            [
                'user_id' => 1,
                'kategori_id' => 1,
                'judul' => 'Tips Camping',
                'slug' => 'tips-camping',
                'gambar' => 'default.jpg',
                'isi' => 'Isi artikel camping...',
                'tag' => 'outdoor,camping',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // ================= KOMENTAR =================
        DB::table('komentar')->insert([
            [
                'artikel_id' => 1,
                'penyewa_id' => 1,
                'isi' => 'Artikel bagus!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // ================= PEMESANAN =================
        DB::table('pemesanan')->insert([
            [
                'user_id' => 1,
                'penyewa_id' => 1,
                'tanggal_pesan' => Carbon::now(),
                'tanggal_kembali' => Carbon::now()->addDays(3),
                'total' => 300000,
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // ================= DETAIL PEMESANAN =================
        DB::table('detail_pemesanan')->insert([
            [
                'pemesanan_id' => 1,
                'alat_id' => 1,
                'denda_id' => null,
                'jumlah' => 1,
                'harga' => 100000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}