@extends('layout')

@section('content')
<div class="features_items"><!--features_items-->
    <!-- Facebook Share Button -->
    <div class="fb-share-button" 
         data-href="{{ url()->current() }}" 
         data-layout="button_count" 
         data-size="small">
        <a target="_blank" 
           href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" 
           class="fb-xfbml-parse-ignore">Chia sẻ</a>
    </div>

    <!-- Facebook Like Button -->
    <div class="fb-like" 
         data-href="{{ url()->current() }}" 
         data-width="" 
         data-layout="button_count" 
         data-action="like" 
         data-size="small" 
         data-share="false">
    </div>

    <!-- Hiển thị tên danh mục -->
    @foreach($category_name as $key => $name)
        <h2 class="title text-center">{{ $name->category_name }}</h2>
    @endforeach

    <!-- Hiển thị sản phẩm thuộc danh mục -->
    @foreach($category_by_id as $key => $product)
        <a href="{{ URL::to('/chi-tiet-san-pham/' . $product->product_id) }}">
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{ URL::to('public/uploads/product/' . $product->product_image) }}" alt="" />
                            <h2>{{ number_format($product->product_price) . ' VNĐ' }}</h2>
                            <p>{{ $product->product_name }}</p>
                            <a href="#" class="btn btn-default add-to-cart">
                                <i class="fa fa-shopping-cart"></i> Thêm giỏ hàng
                            </a>
                        </div>
                    </div>

                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="#"><i class="fa fa-plus-square"></i> Yêu thích</a></li>
                            <li><a href="#"><i class="fa fa-plus-square"></i> So sánh</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </a>
    @endforeach
</div><!--features_items-->

<!-- Facebook Comments Plugin -->
<div class="fb-comments" 
     data-href="{{ url()->current() }}" 
     data-width="" 
     data-numposts="20">
</div>
@endsection
