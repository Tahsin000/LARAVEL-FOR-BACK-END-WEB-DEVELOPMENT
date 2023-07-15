@extends('layout.master')

@section('title', 'CARD | '.$product->name)

<meta name="csrf_token" content="{{csrf_token()}}">

<style>
    .h-screen{
        height:100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<div class="h-auto p-t-60 p-b-20 h-screen">
    <div class=""></div>
    <div class="container">
        <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
            <button class="how-pos3 hov3 trans-04 js-hide-modal1">
            </button>
            <div id="error_message"> </div>
            <div class="row">
                <div class="col-md-6 col-lg-7 p-b-30">
                    <div class="p-l-25 p-r-30 p-lr-0-lg">
                        <div class="wrap-slick3 flex-sb flex-w">

                            <div class="slick3 gallery-lb slick-initialized slick-slider slick-dotted">
                                <div class="slick-list draggable">
                                    <div class="slick-track" style="opacity: 1; width: 1539px;">
                                        @if(isset($images[0]))
                                            <div class="item-slick3 slick-slide slick-current slick-active" data-thumb="images/product-detail-01.jpg" data-slick-index="0" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide10" aria-describedby="slick-slide-control10" style="width: 513px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
                                                <div class="wrap-pic-w pos-relative">
                                                    <img height="250px" src="{{ asset($images[0]) }}" alt="IMG-PRODUCT">
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="d-flex ">
                                    @if(isset($images[1]))
                                        <img height="150px" src="{{ asset($images[1]) }}" alt="">
                                    @endif
                                    @if(isset($images[2]))
                                        <img height="150px" src="{{ asset($images[2]) }}" alt="">
                                    @endif
                                    @if(isset($images[3]))
                                        <img height="150px" src="{{ asset($images[3]) }}" alt="">
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 p-b-30">
                    <div class="p-r-50 p-t-5 p-lr-0-lg">
                        <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                            {{$product->name}} <br>
                            <small style="font-size: 10px;">{{$product->category->category_name}}</small>
                        </h4>
                        <span class="mtext-106 cl2">
                            ${{ $product->price }}
                        </span>
                        <p class="stext-102 cl3 p-t-23">
                            {{$product->details}}
                        </p>
                        <form action="/add-to-cart" method="POST">
                            @csrf
                            <div class="p-t-33">
                                <div class="flex-w flex-r-m p-b-10">
                                    <div class="size-203 flex-c-m respon6">
                                        Size
                                    </div>
                                    <div class="size-204 respon6-next">
                                        <div class="rs1-select2 bor8 bg0">
                                            <select class="js-select2 select2-hidden-accessible" name="size" tabindex="-1" aria-hidden="true">
                                                <option value="">Choose an option</option>
                                                <option value="s">Size S</option>
                                                <option value="m">Size M</option>
                                                <option value="l">Size L</option>
                                                <option value="xl">Size XL</option>
                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 142px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-time-mj-container"><span class="select2-selection__rendered" id="select2-time-mj-container" title="Choose an option">Choose an option</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-w flex-r-m p-b-10">
                                </div>
                                <div class="flex-w flex-r-m p-b-10">
                                    <div class="size-204 flex-w flex-m respon6-next">
                                        <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                            <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 zmdi zmdi-minus"></i>
                                            </div>
                                            <input class="mtext-104 cl3 txt-center num-product" id="qty" type="text" name="quantity" value="1" onchange="validateAmount(this.value, {{ $product->id }})">
                                            <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 zmdi zmdi-plus"></i>
                                            </div>
                                        </div>
                                        <input type="hidden" name="pid" value="{{$product->id}}">
                                        <input type="hidden" name="price" value="{{$product->price}}">
                                        <input type="hidden" name="name" value="{{$product->name}}">
                                        <button type="submit" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                            Add to cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="p-b-10">
        <h3 class="ltext-103 cl5 mb-5">
            Related Products
        </h3>
    </div>
    <div class="row isotope-grid">
        @foreach($related_products as $rel_product)

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="{{asset(explode('|', $rel_product->image)[0])}}" alt="IMG-PRODUCT">
                        <a href="{{url('find_products/'.$rel_product->id)}}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                            Quick View
                        </a>
                    </div>
                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                {{$rel_product->name}}
                            </a>
                            <span class="stext-105 cl3">
                                ${{$rel_product->price}}
                            </span>
                        </div>
                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="{{asset('images/icons/icon-heart-01.png')}}" alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{asset('images/icons/icon-heart-02.png')}}" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    @endforeach
</div>

<script>
    function validateAmount(amount, pid){
        $.ajaxSetup({
            "headers":{
                "X-CSRF-TOKEN": $('meta[name = "csrf_token"]').attr('content')
            }
        });
        $.ajax({
            url:"/products/validate_amount",
            data:{
                'qty' : amount,
                'pid' : pid 
            },
            async:false,
            type: 'POST'
        }).done(function(data){
            let newData = JSON.parse(data);
            let htm = ''; 

            if (newData.success){
                htm += `<div class="alert alert-danger">${newData.message}</div>`;
                document.getElementById('error_message').innerHTML = htm;
                document.getElementById('qty').value = 1;
            } else {
                document.getElementById('error_message').innerHTML = '';
            }
            console.log(newData);


            
        });
        // alert(`${amount}, ${pid}`);
    }
</script>
