<?php

use Illuminate\Database\Seeder;
use App\Models\Brands;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Brands::first() !== null) {
            Brands::truncate();
        }

        $bransName = [
            'toshiba',
            'asus',
            'msi',
            'acer',
            'avita',
            'apple',
        ];
        $insert = [];

        foreach ($bransName as $brand) {
            $insert[] = [
                'name' => $brand,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ];
        }

        Brands::insert($insert);
    }
}
