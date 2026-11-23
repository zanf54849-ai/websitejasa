<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Produk;

class PlafondSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Ensure Admin and Demo Guest Users exist
        $admin = User::firstOrNew(['email' => 'admin@gmail.com']);
        $admin->name = 'Admin Kurnia Plafond';
        $admin->password = Hash::make('admin123');
        $admin->role = 'Admin';
        $admin->save();

        $guest = User::firstOrNew(['email' => 'pelanggan@gmail.com']);
        $guest->name = 'Budi Santoso';
        $guest->password = Hash::make('pelanggan123');
        $guest->role = 'Guest';
        $guest->save();

        // 2. Clear old unrelated products or populate new ones
        // First, detach foreign keys in pembelians if any point to obsolete products
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('pembelians')->truncate();
        DB::table('produks')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $services = [
            [
                'kode' => 'PL-PVC-01',
                'nama' => 'Plafon PVC Premium Motif Kayu & Glossy',
                'tipe' => 'Plafon PVC',
                'jenis' => 'Paket Terpasang Lengkap (m²)',
                'harga' => 165000,
                'stok' => 500,
                'deskripsi' => 'Layanan pemasangan plafon PVC premium anti bocor, anti rayap, tidak perlu cat ulang. Sudah termasuk rangka hollow galvanis tebal 0.3mm, list pigura dinding, dan garansi kerapian.',
                'image' => 'produk/plafond3.jpeg',
            ],
            [
                'kode' => 'PL-GYP-01',
                'nama' => 'Plafon Gypsum Flat Minimalis',
                'tipe' => 'Plafon Gypsum',
                'jenis' => 'Paket Terpasang Lengkap (m²)',
                'harga' => 95000,
                'stok' => 800,
                'deskripsi' => 'Pemasangan plafon gypsum rata flat menggunakan board berkualitas tebal 9mm (Jayaboard/Elephant). Rangka hollow galvanis 2x4 & 4x4, kompon sambungan rapi dan cat dasar putih.',
                'image' => 'produk/plafond2.jpeg',
            ],
            [
                'kode' => 'PL-GYP-02',
                'nama' => 'Plafon Gypsum Drop Ceiling + Hidden LED',
                'tipe' => 'Plafon Gypsum',
                'jenis' => 'Custom Drop Ceiling (m²)',
                'harga' => 135000,
                'stok' => 350,
                'deskripsi' => 'Desain plafon gypsum bertingkat mewah (drop ceiling / up ceiling) dengan ceruk untuk indirect lighting LED strip. Sangat cocok untuk ruang tamu, ruang keluarga, dan kamar tidur utama.',
                'image' => 'produk/plafond17.jpg',
            ],
            [
                'kode' => 'PT-GYP-02',
                'nama' => 'Partisi Dinding Gypsum 2 Sisi (Insulasi Suara)',
                'tipe' => 'Partisi Ruangan',
                'jenis' => 'Sekat Kantor & Rumah (m²)',
                'harga' => 185000,
                'stok' => 450,
                'deskripsi' => 'Pembuatan partisi pembatas ruangan dua muka kokoh, rangka baja ringan / hollow galvanis, gypsum board 9mm di kedua sisi, kompon halus siap cat. Memberikan privasi maksimal.',
                'image' => 'produk/partisi1.jpeg',
            ],
            [
                'kode' => 'PT-GYP-01',
                'nama' => 'Partisi Gypsum 1 Sisi (Wall Lining Pelapis)',
                'tipe' => 'Partisi Ruangan',
                'jenis' => 'Pelapis Dinding Lembab (m²)',
                'harga' => 110000,
                'stok' => 600,
                'deskripsi' => 'Solusi tepat menutupi dinding retak, rembes, atau tidak rata. Pemasangan satu muka dengan rangka hollow, membuat dinding kembali tegak lurus, rata, dan rapi seketika.',
                'image' => 'produk/plafond10.jpeg',
            ],
            [
                'kode' => 'LS-GYP-01',
                'nama' => 'Pemasangan List Profil Gypsum Modern',
                'tipe' => 'List & Ornamen',
                'jenis' => 'Per Meter Lari (m¹)',
                'harga' => 25000,
                'stok' => 1200,
                'deskripsi' => 'Pemasangan list profil tepi plafon gypsum beragam model dari tipe bayar minimalis 7cm - 12cm hingga profil klasik ukir mewah. Sambungan presisi dan rapi.',
                'image' => 'produk/plafond16.jpg',
            ],
            [
                'kode' => 'SV-JBD-00',
                'nama' => 'Survey Lokasi & Desain Konsultasi Gratis',
                'tipe' => 'Layanan Khusus',
                'jenis' => 'Gratis Jabodetabek',
                'harga' => 0,
                'stok' => 9999,
                'deskripsi' => 'Layanan survey lokasi ukur ruangan langsung oleh tukang berpengalaman ke lokasi Anda (Jabodetabek). Dapatkan konsultasi desain, pemilihan material, dan kalkulasi RAB gratis tanpa ikatan.',
                'image' => 'produk/plafond16.jpg',
            ],
        ];

        foreach ($services as $srv) {
            Produk::create($srv);
        }

        // Demo sample order
        $produkGypsum = Produk::where('kode', 'PL-GYP-01')->first();
        if ($produkGypsum && $guest) {
            DB::table('pembelians')->insert([
                'kode_pembelian' => 'KP-2026-001',
                'produk_id' => $produkGypsum->id,
                'banyak' => 36, // 36 m2
                'bayar' => 36 * $produkGypsum->harga,
                'user_id' => $guest->id,
                'status' => 'Proses',
                'created_at' => now()->subDays(2),
                'updated_at' => now()->subDay(),
            ]);
        }
    }
}
