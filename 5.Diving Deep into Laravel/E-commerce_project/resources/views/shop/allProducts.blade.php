<div class="bg0 m-t-23 p-b-140">
    <div class="container">
        <div class="flex-w flex-sb-m p-b-52">


        </div>
        <div class="row isotope-grid">
            @foreach($products as $product)
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <div class="block2">
{{--                    <a href="{{url('find_products/'.$product->id)}}">Check</a>--}}
                    <div class="block2-pic hov-img0">
                        <img src="{{ asset(explode('|', $product->image)[0])}}" alt="IMG-PRODUCT" />
                        <a href="{{url('find_products/'.$product->id)}}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                            Quick View
                        </a>
                    </div>
                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l">
                            <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                {{ $product->name  }}
                            </a>
                            <span class="stext-105 cl3"> {{ $product->price  }}tk </span>
                        </div>
                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON" />

                            </a>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach

        </div>

        <div class="flex-c-m flex-w w-full p-t-45">
            {{ $products->links('vendor.pagination.default') }}
        </div>
    </div>
</div>

@include('homePage.productModal')