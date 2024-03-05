<?php

namespace Database\Seeders;

use App\Models\Furniture;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FurnitureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $furnitures = [];

        $furnitures[] = [
            'category_id' => 3,
            'material1_id' => 1,
            'sku' => 32100001,
            'name' => 'Root decoration on the table',
            'length' => 20,
            'width' => 15,
            'height' => 40,
            'price' => 9.50,
            'packing' => 'box'
        ];

        $furnitures[] = [
            'category_id' => 1,
            'material1_id' => 1,
            'sku' => 11100001,
            'name' => 'Pion Round Stool',
            'length' => 30,
            'width' => 30,
            'height' => 45,
            'price' => 28.50,
            'packing' => 'box'
        ];

        $furnitures[] = [
            'category_id' => 1,
            'category_id' => 1,
            'sku' => 11110003,
            'name' => 'Round stool with goat leather top',
            'length' => 30,
            'width' => 30,
            'height' => 50,
            'price' => 32,
            'packing' => 'box'
        ];

        $furnitures[] = [
            'category_id' => 1,
            'material1_id' => 1,
            'sku' => 11110001,
            'name' => 'SQUARE STOOL BRANCHES WITH GOAT LEATHER TOP',
            'length' => 35,
            'width' => 35,
            'height' => 45,
            'price' => 35,
            'packing' => 'box'
        ];

        $furnitures[] = [
            'category_id' => 1,
            'material1_id' => 1,
            'sku' => 11100005,
            'name' => 'ROUND ROOT STOOL',
            'length' => 30,
            'width' => 30,
            'height' => 45,
            'price' => 19.50,
            'packing' => 'box'
        ];

        $furnitures[] = [
            'category_id' => 3,
            'material1_id' => 1,
            'sku' => 31100006,
            'name' => 'STAND DECORATION',
            'length' => 30,
            'width' => 30,
            'height' => 125,
            'price' => 28.50,
            'packing' => 'box'
        ];

        $furnitures[] = [
            'category_id' => 5,
            'sku' => 51100007,
            'name' => 'TEAK BOWL DIA 30',
            'length' => 30,
            'width' => 30,
            'height' => 10,
            'price' => 8,
            'packing' => 'corrugated paper'
        ];

        $furnitures[] = [
            'category_id' => 5,
            'sku' => 51100008,
            'name' => 'TEAK BOWL DIA 40',
            'length' => 40,
            'width' => 40,
            'height' => 10,
            'price' => 11.50,
            'packing' => 'corrugated paper'
        ];

        $furnitures[] = [
            'category_id' => 5,
            'sku' => 51100009,
            'name' => 'TEAK BOWL DIA 50',
            'length' => 50,
            'width' => 50,
            'height' => 12,
            'price' => 15,
            'packing' => 'corrugated paper'
        ];

        $furnitures[] = [
            'category_id' => 2,
            'sku' => 21100010,
            'name' => 'U MOSAIC TABLE ',
            'length' => 45,
            'width' => 45,
            'height' => 45,
            'price' => 33,
            'packing' => 'corrugated paper'
        ];

        $furnitures[] = [
            'category_id' => 1,
            'sku' => 11110011,
            'name' => 'ROUND HIDE STOOL',
            'length' => 40,
            'width' => 40,
            'height' => 48,
            'price' => 0,
            'packing' => 'box'
        ];

        $furnitures[] = [
            'category_id' => 1,
            'sku' => 11100012,
            'name' => 'ROOT BENCH',
            'length' => 80,
            'width' => 40,
            'height' => 45,
            'price' => 0,
            'packing' => 'box'
        ];

        $furnitures[] = [
            'category_id' => 1,
            'sku' => 11110013,
            'name' => 'Drum stool with legs erotion',
            'length' => 30,
            'width' => 30,
            'height' => 45,
            'price' => 0,
            'packing' => 'box'
        ];

        $furnitures[] = [
            'category_id' => 1,
            'sku' => 11110014,
            'name' => 'PATNEM ROUND STOOL',
            'length' => 46,
            'width' => 46,
            'height' => 46,
            'price' => 0,
            'packing' => 'box'
        ];

        $furnitures[] = [
            'category_id' => 1,
            'sku' => 11110015,
            'name' => 'FOLDING CHAIR',
            'length' => 47,
            'width' => 38,
            'height' => 47,
            'price' => 0,
            'packing' => 'box'
        ];

        $furnitures[] = [
            'category_id' => 1,
            'sku' => 11110016,
            'name' => 'BAR STOOL WITH TOP GOAT LEATHER',
            'length' => 35,
            'width' => 35,
            'height' => 55,
            'price' => 0,
            'packing' => 'box'
        ];

        $furnitures[] = [
            'category_id' => 3,
            'sku' => 31000017,
            'name' => 'STANDING FLOWER POTT WITH 3 FLOWERR',
            'length' => 55,
            'width' => 35,
            'height' => 95,
            'price' => 0,
            'packing' => 'box'
        ];

        $furnitures[] = [
            'category_id' => 1,
            'sku' => 11110018,
            'name' => 'DANDANG STOOL',
            'length' => 52,
            'width' => 52,
            'height' => 48,
            'price' => 0,
            'packing' => 'box'
        ];

        $furnitures[] = [
            'category_id' => 1,
            'sku' => 11110019,
            'name' => '---',
            'length' => 35,
            'width' => 35,
            'height' => 75,
            'price' => 0,
            'packing' => 'box'
        ];

        $furnitures[] = [
            'category_id' => 1,
            'sku' => 11110020,
            'name' => 'DENKY CHAIR',
            'length' => 69,
            'width' => 82,
            'height' => 76,
            'price' => 0,
            'packing' => 'box'
        ];

        $furnitures[] = [
            'category_id' => 2,
            'sku' => 21100021,
            'name' => 'GRAYSON COFFE TABLE',
            'length' => 110,
            'width' => 65,
            'height' => 50,
            'price' => 0,
            'packing' => 'box'
        ];

        $furnitures[] = [
            'category_id' => 1,
            'sku' => 11110022,
            'name' => 'SQUARE STOOL ZEBRA MOTIF',
            'length' => 45,
            'width' => 45,
            'height' => 45,
            'price' => 0,
            'packing' => 'box'
        ];

        $furnitures[] = [
            'category_id' => 1,
            'sku' => 11120023,
            'name' => 'LYON BAR STOOL',
            'length' => 46,
            'width' => 37,
            'height' => 65,
            'price' => 0,
            'packing' => 'box'
        ];

        $furnitures[] = [
            'category_id' => 1,
            'sku' => 11120024,
            'name' => 'MALTA BAR STOOL',
            'length' => 65,
            'width' => 40,
            'height' => 65,
            'price' => 0,
            'packing' => 'box'
        ];

        $furnitures[] = [
            'category_id' => 1,
            'sku' => 11110025,
            'name' => 'BENCH METRO',
            'length' => 120,
            'width' => 45,
            'height' => 90,
            'price' => 0,
            'packing' => 'box'
        ];

        $furnitures[] = [
            'category_id' => 1,
            'sku' => 11120026,
            'name' => 'PEANUT STOOL',
            'length' => 130,
            'width' => 50,
            'height' => 45,
            'price' => 0,
            'packing' => 'box'
        ];

        $furnitures[] = [
            'category_id' => 1,
            'sku' => 11110027,
            'name' => 'QUEEN BENCH SOFA NO SEAT BACK',
            'length' => 128,
            'width' => 52,
            'height' => 48,
            'price' => 0,
            'packing' => 'box'
        ];

        $furnitures[] = [
            'category_id' => 1,
            'sku' => 11100028,
            'name' => 'QUEEN BENCH SOFA 1 SEATER',
            'length' => 71,
            'width' => 68,
            'height' => 83,
            'price' => 0,
            'packing' => 'box'
        ];

        $furnitures[] = [
            'category_id' => 1,
            'sku' => 11110029,
            'name' => 'PATLUH ROUND STOOL PATCHWORK STYLE',
            'length' => 40,
            'width' => 40,
            'height' => 45,
            'price' => 0,
            'packing' => 'box'
        ];

        $furnitures[] = [
            'category_id' => 1,
            'sku' => 11110030,
            'name' => 'SQUARE STOOL PATHCWORK',
            'length' => 45,
            'width' => 45,
            'height' => 45,
            'price' => 0,
            'packing' => 'box'
        ];

        $furnitures[] = [
            'category_id' => 1,
            'sku' => 11110031,
            'name' => 'SQUARE STOOL PATCHWORK',
            'length' => 30,
            'width' => 30,
            'height' => 35,
            'price' => 0,
            'packing' => 'box'
        ];

        $furnitures[] = [
            'category_id' => 1,
            'sku' => 11110032,
            'name' => 'TRIANGLE BAR STOOL',
            'length' => 35,
            'width' => 35,
            'height' => 75,
            'price' => 0,
            'packing' => 'box'
        ];

        $furnitures[] = [
            'category_id' => 1,
            'sku' => 11110033,
            'name' => 'QUEEN BENCH SOFA 2 SEATHER',
            'length' => 125,
            'width' => 68,
            'height' => 83,
            'price' => 0,
            'packing' => 'box'
        ];

        $furnitures[] = [
            'category_id' => 3,
            'sku' => 31100034,
            'name' => 'STAND RUSTIC FOR WINE',
            'length' => 49,
            'width' => 28,
            'height' => 180,
            'price' => 0,
            'packing' => 'corrugated paper'
        ];

        $furnitures[] = [
            'category_id' => 2,
            'sku' => 21110035,
            'name' => 'SQUARE ROOT STAND TABLE',
            'length' => 40,
            'width' => 40,
            'height' => 40,
            'price' => 0,
            'packing' => 'box'
        ];

        $furnitures[] = [
            'category_id' => 3,
            'sku' => 32100036,
            'name' => 'WALL RACK FOR WINE',
            'length' => 15,
            'width' => 15,
            'height' => 100,
            'price' => 0,
            'packing' => 'box'
        ];

        $furnitures[] = [
            'category_id' => 1,
            'sku' => 11110037,
            'name' => 'GOAT  LONG STOOL',
            'length' => 107,
            'width' => 40,
            'height' => 45,
            'price' => 0,
            'packing' => 'corrugated paper'
        ];

        $furnitures[] = [
            'category_id' => 1,
            'sku' => 11100038,
            'name' => 'ROUND STOOL SISAL',
            'length' => 40,
            'width' => 40,
            'height' => 45,
            'price' => 0,
            'packing' => 'box'
        ];

        $furnitures[] = [
            'category_id' => 1,
            'sku' => 1110039,
            'name' => 'SQUARE STOOL SISAL',
            'length' => 40,
            'width' => 40,
            'height' => 45,
            'price' => 0,
            'packing' => 'box'
        ];

        $furnitures[] = [
            'category_id' => 1,
            'sku' => 11110040,
            'name' => 'ROUND OTTOMAN',
            'length' => 60,
            'width' => 60,
            'height' => 40,
            'price' => 0,
            'packing' => 'box'
        ];

        $furnitures[] = [
            'category_id' => 3,
            'sku' => 31000041,
            'name' => 'STANDING WARDROBE',
            'length' => 40,
            'width' => 40,
            'height' => 190,
            'price' => 0,
            'packing' => 'corrugated paper'
        ];

        $furnitures[] = [
            'category_id' => 1,
            'sku' => 11100042,
            'name' => 'TOOTH STOOL',
            'length' => 30,
            'width' => 30,
            'height' => 40,
            'price' => 0,
            'packing' => 'box'
        ];

        $furnitures[] = [
            'category_id' => 5,
            'sku' => 51100043,
            'name' => 'BOWL HANDLE',
            'length' => 60,
            'width' => 20,
            'height' => 20,
            'price' => 0,
            'packing' => 'box'
        ];

        $furnitures[] = [
            'category_id' => 5,
            'sku' => 51110044,
            'name' => 'STAND BARRACUDA FOR WINE',
            'length' => 40,
            'width' => 40,
            'height' => 140,
            'price' => 0,
            'packing' => 'box'
        ];

        foreach ($furnitures as $data) {
            Furniture::factory()->create([
                'category_id' => $data['category_id'],
                'material1_id' => 1,
                'material2_id' => 1,
                'material3_id' => 1,
                'material4_id' => 1,
                'sku' => $data['sku'],
                'name' => $data['name'],
                'description' => '-',
                'length' => $data['length'],
                'width' => $data['width'],
                'height' => $data['height'],
                'size' => $data['length'] . 'cm x ' . $data['width'] . 'cm x ' . $data['height'] . 'cm',
                'keyword' => '-',
                'price' => $data['price'],
                'payment_options' => 'dp',
                'payment_terms' => 'dp 50%',
                'delivery_terms' => 'fob',
                'delivery_time' => '2-4 weeks',
                'lead_time' => '30-45 days',
                'packing' => $data['packing'],
                'port' => 'Tanjung mas',
                'certification' => 'V-Legal Wood',
                'qty_per_month' => 300,
                'moq' => 300,
                'stock' => 0,
                'convertible' => 0,
                'adjustable' => 0,
                'folded' => 0,
                'extendable' => 0,
            ]);
        }
    }
}