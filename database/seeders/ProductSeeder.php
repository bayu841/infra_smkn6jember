<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Batik Enem Motif 1',
            'category' => 'batikenem',
            'description' => 'Deskripsi lengkap untuk Batik Enem Motif 1. Dibuat dengan bahan berkualitas tinggi dan desain yang unik.',
            'price' => 150000.00,
            'stock' => 50,
            'image' => 'image/batikenem/batik (1).png',
        ]);

        Product::create([
            'name' => 'Batik Enem Motif 2',
            'category' => 'batikenem',
            'description' => 'Deskripsi lengkap untuk Batik Enem Motif 2. Dibuat dengan bahan berkualitas tinggi dan desain yang unik.',
            'price' => 160000.00,
            'stock' => 50,

            'image' => 'image/batikenem/batik (2).png',
        ]);

        Product::create([
            'name' => 'Batik Enem Motif 3',
            'category' => 'batikenem',
            'description' => 'Deskripsi lengkap untuk Batik Enem Motif 3. Dibuat dengan bahan berkualitas tinggi dan desain yang unik.',
            'price' => 170000.00,
            'stock' => 50,

            'image' => 'image/batikenem/batik (3).png',
        ]);

        Product::create([
            'name' => 'Batik Enem Motif 4',
            'category' => 'batikenem',
            'description' => 'Deskripsi lengkap untuk Batik Enem Motif 4. Dibuat dengan bahan berkualitas tinggi dan desain yang unik.',
            'price' => 180000.00,
            'stock' => 50,

            'image' => 'image/batikenem/batik (4).png',
        ]);

        // Energi Enem Products
        Product::create([
            'name' => 'Energi Enem Drink 1',
            'category' => 'energienem',
            'description' => 'Minuman energi menyegarkan dari Energi Enem.',
            'price' => 15000.00,
            'stock' => 50,

            'image' => 'image/energienem/drink1.png', // Ganti dengan path gambar yang sesuai
        ]);
        Product::create([
            'name' => 'Energi Enem Snack 2',
            'category' => 'energienem',
            'description' => 'Camilan sehat dan bergizi dari Energi Enem.',
            'price' => 12000.00,
            'stock' => 50,

            'image' => 'image/energienem/snack1.png', // Ganti dengan path gambar yang sesuai
        ]);

        // Studio Enem Products
        Product::create([
            'name' => 'Studio Enem Photo Print',
            'category' => 'studioenem',
            'description' => 'Cetak foto kualitas studio dari Studio Enem.',
            'price' => 25000.00,
            'image' => 'image/studioenem/photo1.png', // Ganti dengan path gambar yang sesuai
        ]);
        Product::create([
            'name' => 'Studio Enem Video Service',
            'category' => 'studioenem',
            'description' => 'Jasa video profesional dari Studio Enem.',
            'price' => 500000.00,
            'image' => 'image/studioenem/video1.png', // Ganti dengan path gambar yang sesuai
        ]);
    }
}
