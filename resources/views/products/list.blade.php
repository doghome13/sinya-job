@extends('main')

@section('title', '商品列表')

@section('style')
    @parent
    .content {
        padding: 50px 50px 0 50px;
    }
    .content .produst-list {
        margin-top: 50px;
        display: flex;
        flex-wrap: wrap;
    }
    .product-box {
        padding: 10px;
    }
    .product-box ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }
    .product-box li:not(nth-last-of-type) {
        margin-bottom: 5px;
    }
    .product-box li.brand,
    .product-box li.p-name,
    .product-box li.p-price {
        display: flex;
    }
    .product-box li.p-img {
        text-align: center;
    }
    li.pick-cart button {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .footer {
        margin-top: 20px;
        display: flex;
        justify-content: center;
    }
@endsection

@section('content')
    <div class="produst-list">
        @forelse ($res->items() as $product)
            <div class="col-3 product-box">
                <ul>
                    <li class="brand">{{ $product->brand->name }}</li>
                    <li class="p-img">
                        <img src="{{ asset('img/default-cat.png') }}" class="img-fluid img-thumbnail" />
                    </li>
                    <li class="p-name">{{ $product->name }}</li>
                    <li class="p-price">
                        <div class="row">
                            <div class="col-6">${{ (int) $product->real_price }}</div>
                            <div class="col-6">
                                <s>${{ (int) $product->official_price }}</s>
                            </div>
                        </div>
                    </li>
                    <li class="pick-cart">
                        <button type="button" class="btn btn-primary btn-lg">
                            <svg xmlns="{{ asset('img/cart-fill.svg') }}" width="20" height="20" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                              </svg>
                              <span>BUY</span>
                        </button>
                    </li>
                </ul>
            </div>
        @empty
            <p class="empty-data">查無資料</p>
        @endforelse
    </div>
    <div class="footer">
        @includeWhen($res->total(), 'paginator', ['res' => $res])
    </div>
@endsection
