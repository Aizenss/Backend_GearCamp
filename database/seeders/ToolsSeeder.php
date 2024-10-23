<?php

namespace Database\Seeders;

use App\Models\Tools;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ToolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tools::insert([
            [
                'name_tool' => 'Tenda Dome 4 Orang',
                'description_tool' => 'Tenda dome yang dapat menampung hingga 4 orang, dilengkapi dengan ventilasi dan pelindung hujan.',
                'stock_tool' => 100,
                'price_day_tool' => 50000,
                'image_tool' => '',
            ],
            [
                'name_tool' => 'Sleeping Bag',
                'description_tool' => 'Sleeping bag hangat dan nyaman untuk berkemah di berbagai cuaca.',
                'stock_tool' => 100,
                'price_day_tool' => 25000,
                'image_tool' => '',
            ],
            [
                'name_tool' => 'Matras Camping',
                'description_tool' => 'Matras ringan yang mudah dibawa, cocok untuk kenyamanan saat berkemah.',
                'stock_tool' => 100,
                'price_day_tool' => 15000,
                'image_tool' => '',
            ],
            [
                'name_tool' => 'Kompor Portable',
                'description_tool' => 'Kompor gas portable yang mudah dibawa, dilengkapi dengan pengaturan api.',
                'stock_tool' => 100,
                'price_day_tool' => 30000,
                'image_tool' => '',
            ],
            [
                'name_tool' => 'Lampu Tenda',
                'description_tool' => 'Lampu LED untuk penerangan di dalam tenda dengan baterai tahan lama.',
                'stock_tool' => 100,
                'price_day_tool' => 10000,
                'image_tool' => '',
            ],
            [
                'name_tool' => 'Ransel Hiking 60L',
                'description_tool' => 'Ransel hiking berkapasitas 60L dengan banyak kompartemen untuk penyimpanan.',
                'stock_tool' => 100,
                'price_day_tool' => 40000,
                'image_tool' => '',
            ],
            [
                'name_tool' => 'Kursi Lipat Camping',
                'description_tool' => 'Kursi lipat ringan dan mudah dibawa, cocok untuk berkemah di alam terbuka.',
                'stock_tool' => 100,
                'price_day_tool' => 20000,
                'image_tool' => '',
            ],
            [
                'name_tool' => 'Meja Lipat Camping',
                'description_tool' => 'Meja lipat portabel yang ringan, cocok untuk makan di area perkemahan.',
                'stock_tool' => 100,
                'price_day_tool' => 35000,
                'image_tool' => '',
            ],
            [
                'name_tool' => 'Botol Air Hiking 1L',
                'description_tool' => 'Botol air tahan panas dan dingin dengan kapasitas 1 liter.',
                'stock_tool' => 100,
                'price_day_tool' => 12000,
                'image_tool' => '',
            ],
            [
                'name_tool' => 'Alat Masak Camping',
                'description_tool' => 'Set alat masak ringan yang terdiri dari panci, wajan, dan sendok untuk berkemah.',
                'stock_tool' => 100,
                'price_day_tool' => 30000,
                'image_tool' => '',
            ],
            [
                'name_tool' => 'Pisau Lipat Multifungsi',
                'description_tool' => 'Pisau lipat dengan berbagai fungsi seperti pisau, gunting, pembuka botol, dan lainnya.',
                'stock_tool' => 100,
                'price_day_tool' => 15000,
                'image_tool' => '',
            ],
            [
                'name_tool' => 'Peralatan Survival',
                'description_tool' => 'Set peralatan survival yang mencakup pisau, tali, dan peluit darurat.',
                'stock_tool' => 100,
                'price_day_tool' => 25000,
                'image_tool' => '',
            ],
            [
                'name_tool' => 'Cooler Box',
                'description_tool' => 'Cooler box dengan kapasitas besar untuk menjaga makanan dan minuman tetap dingin.',
                'stock_tool' => 100,
                'price_day_tool' => 45000,
                'image_tool' => '',
            ],
            [
                'name_tool' => 'Trekking Pole',
                'description_tool' => 'Trekking pole untuk membantu menjaga keseimbangan saat mendaki.',
                'stock_tool' => 100,
                'price_day_tool' => 20000,
                'image_tool' => '',
            ],
            [
                'name_tool' => 'Water Filter Portable',
                'description_tool' => 'Filter air portabel yang dapat digunakan untuk menyaring air di alam terbuka.',
                'stock_tool' => 100,
                'price_day_tool' => 30000,
                'image_tool' => '',
            ],
        ]);
    }
}
