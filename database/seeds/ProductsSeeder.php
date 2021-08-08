<?php

use App\Models\Brands;
use App\Models\Products;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Products::first() !== null) {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            Products::truncate();
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }

        $brands = Brands::select('id')->get();
        $limit = 100; // 總筆數
        $count = 1;

        try {
            DB::beginTransaction();

            while ($count <= $limit) {
                $officalPrice = rand(500, 50000);
                $product = new Products();
                $product->brand_id = $brands->random()->id;
                $product->official_price = $officalPrice;
                $product->real_price = rand(100, $officalPrice);
                $product->name = '商品#' . $count;
                $product->save();
                $count++;
            }

            DB::commit();
        } catch (\Exception $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
