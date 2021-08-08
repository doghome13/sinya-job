<?php

use Illuminate\Database\Seeder;
use App\Models\Brands;
use Illuminate\Support\Facades\DB;

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
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            Brands::truncate();
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
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
