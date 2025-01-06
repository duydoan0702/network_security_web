@extends('layout')

@section('content')
<div class="features_items"><!--features_items-->
    <h2 class="title text-center">Kết quả tìm kiếm</h2>

    @if($search_product->isEmpty())
        <p class="text-center">Không tìm thấy sản phẩm nào phù hợp.</p>
    @else
        @foreach($search_product as $product)
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <form action="{{URL::to('/save-cart')}}" method="POST">
                            @csrf
                            <!-- Pass product data into hidden form -->
                            <input type="hidden" name="productid_hidden" value="{{ $product->product_id }}" class="cart_product_id_{{ $product->product_id }}">
                            <input type="hidden" value="{{ $product->product_name }}" class="cart_product_name_{{ $product->product_id }}">
                            <input type="hidden" value="{{ $product->product_image }}" class="cart_product_image_{{ $product->product_id }}">
                            <input type="hidden" value="{{ $product->product_price }}" class="cart_product_price_{{ $product->product_id }}">
                            <input type="hidden" name="qty" value="1" class="cart_product_qty_{{ $product->product_id }}">

                            <!-- Link to product details page -->
                            <a href="{{ URL::to('/chi-tiet-san-pham/' . $product->product_id) }}">
                                <img src="{{ URL::to('public/uploads/product/' . $product->product_image) }}" alt="{{ $product->product_name }}" />
                                <h2>{{ number_format($product->product_price) . ' VNĐ' }}</h2>
                                <p>{{ $product->product_name }}</p>
                            </a>

                            <!-- Add to cart button -->
                            <button type="submit" class="btn btn-default add-to-cart" 
                                    data-id_product="{{ $product->product_id }}" name="add-to-cart">
                                Thêm vào giỏ hàng
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Tùy chọn khác (Yêu thích, So sánh) -->
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class="fa fa-plus-square"></i>Yêu thích</a></li>
                        <li><a href="#"><i class="fa fa-plus-square"></i>So sánh</a></li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    @endif
</div><!--features_items-->
@endsection
