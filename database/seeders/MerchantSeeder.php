<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Merchant;

class MerchantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Merchant::create([
            'name' => 'Katering Sehat',
            'email' => 'katering@example.com',
            'password' => bcrypt('password123'),
            'contact' => '081234567890',
            'description' => 'Katering sehat dan lezat untuk Anda.'
        ]);
    }
}
