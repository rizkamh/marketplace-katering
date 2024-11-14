<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create([
            'merchant_id' => 1, // Sesuaikan dengan ID merchant yang ada
            'name' => 'Nasi Kotak Sehat',
            'description' => 'Nasi dengan lauk sehat dan bergizi',
            'price' => 50000
        ]);
    }
}
