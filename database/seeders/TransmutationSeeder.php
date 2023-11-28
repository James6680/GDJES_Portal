<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransmutationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [0, 3.99, 60],
            [4, 7.99, 61],
            [8, 11.99, 62],
            [12, 15.99, 63],
            [16, 19.99, 64],
            [20, 23.99, 65],
            [24, 27.99, 66],
            [28, 31.99, 67],
            [32, 35.99, 68],
            [36, 39.99, 69],
            [40, 43.99, 70],
            [44, 47.99, 71],
            [48, 51.99, 72],
            [52, 55.99, 73],
            [56, 59.99, 74],
            [60, 61.59, 75],
            [61.6, 63.19, 76],
            [63.2, 64.79, 77],
            [64.8, 66.39, 78],
            [66.4, 67.99, 79],
            [68, 69.59, 80],
            [69.6, 71.19, 81],
            [71.2, 72.79, 82],
            [72.8, 74.39, 83],
            [74.4, 75.99, 84],
            [76, 77.59, 85],
            [77.6, 79.19, 86],
            [79.2, 80.79, 87],
            [80.8, 82.39, 88],
            [82.4, 83.99, 89],
            [84, 85.59, 90],
            [85.6, 87.19, 91],
            [87.2, 88.79, 92],
            [88.8, 90.39, 93],
            [90.4, 91.99, 94],
            [92, 93.59, 95],
            [93.6, 95.19, 96],
            [95.2, 96.79, 97],
            [96.8, 98.39, 98],
            [98.4, 99.99, 99],
            [100, 100, 100],
        ];

        foreach ($data as $row) {
            DB::table('transmutation_table')->insert([
                'low' => $row[0],
                'high' => $row[1],
                'equivalent' => $row[2],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}