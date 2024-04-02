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
            'name' => 'Dell 14 Inch Laptop',
            'price' => 34990.00,
            'description' => "Dell 14 Laptop, 12th Gen Intel Core i3-1215U Processor/8GB/512GB SSD/Intel UHD Graphics/14.0 inch(35.56cm) FHD/Windows 11 + MSO'21/15 Month McAfee/Spill-Resistant Keyboard/Grey/Thin & Light 1.48kg",
        ]);

        Product::create([
            'name' => 'Samsung Galaxy Book',
            'price' => 114999.90,
            'description' => 'Samsung Galaxy Book4 360 (Gray, 16GB RAM, 512GB SSD)| 15.6" Super AMOLED Touchscreen| Intel Core 5 120U Processor| 2 in 1 Laptop| Windows 11 Home| MS Office 2021| Fingerprint Reader| S-Pen Included',
        ]);

        Product::create([
            'name' => 'HP Laptop',
            'price' => 37400.00,
            'description' => 'HP Laptop 15s, 12th Gen Intel Core i3, 15.6-inch (39.6 cm), 8GB DDR4, 512GB SSD, Thin & Light, Dual Speakers (Win 11, MSO 2021, Silver, 1.69 kg), fq5007TU / FQ5327TU',
        ]);

        Product::create([
            'name' => 'ASUS VivoBook',
            'price' => 19990.00,
            'description' => 'ASUS VivoBook 15 (2021), 15.6-inch (39.62 cm) HD, Dual Core Intel Celeron N4020, Thin and Light Laptop (4GB RAM/256GB SSD/Integrated Graphics/Windows 11 Home/Transparent Silver/1.8 Kg), X515MA-BR011W',
        ]);

        Product::create([
            'name' => 'Lenovo IdeaPad',
            'price' => 34990.00,
            'description' => 'Lenovo IdeaPad Slim 3 Intel Core i3 12th Gen 15.6 inch (39.62cm) FHD Thin & Light Laptop (8GB/512GB SSD/Windows 11/Office 2021/3months Game Pass/Arctic Grey/1.63Kg), 82RK00VWIN',
        ]);

        Product::create([
            'name' => 'Lenova Ideapad',
            'price' => 40900.00,
            'description' => 'Lenovo IdeaPad 1 AMD Ryzen 5 5500U 15.6" HD Thin and Light Laptop (16GB/512GB SSD/Windows 11 Home/MS Office 2021/Cloud Grey/1.61Kg), 82R400ERIN',
        ]);

        Product::create([
            'name' => 'HP Laptop',
            'price' => 534900.00,
            'description' => 'HP Laptop 15s, 12th Gen Intel Core i5-1235U, 15.6-inch (39.6 cm), FHD, 16GB DDR4, 512GB SSD, Intel Iris Xe Graphics, Backlit KB,MSO,Thin & Light, Dual Speakers (Win 11, Silver, 1.69 kg), fq5330TU',
        ]);

    }
}
