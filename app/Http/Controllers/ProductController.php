<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Routing\Controller as BaseController;

class ProductController extends BaseController
{

    /**
     * 商品列表
     *
     * @return View
     */
    public function list()
    {
        $perPage = request()->get('perPage', 8);
        $products = Products::select([
            'id',
            'brand_id',
            'name',
            'official_price',
            'real_price',
            'img_name',
            'updated_at',
        ])
        ->with('brand:id,name');

        $res = $products->paginate($perPage);

        return view('products.list',[
            'res' => $res,
        ]);
    }
}
