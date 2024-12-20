<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet"> 
    <link rel="shortcut icon" href="{{asset('public/frontend/images/ico/favicon.ico')}}">
</head>
<body>
    <!-- Giỏ hàng của người dùng -->
    <section id="cart_items">
        <div class="container">
            <!-- Breadcrumb -->
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="{{ URL::to('/product') }}">Home</a></li>
                    <li class="active">Giỏ hàng của bạn</li>
                </ol>
            </div>

            <!-- Bảng thông tin giỏ hàng -->
            <div class="table-responsive cart_info">
                <?php $content = Cart::content(); ?>
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                            <td class="image">Hình ảnh</td>
                            <td class="description">Tên sản phẩm</td>
                            <td class="price">Giá</td>
                            <td class="quantity">Số lượng</td>
                            <td class="total">Tổng</td>
                            <td>Hành động</td>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Lặp qua các sản phẩm trong giỏ hàng -->
                        @foreach($content as $v_content)
                        <tr>
                            <td class="cart_product">
                                <a href="">
                                    <img src="{{ URL::to('public/uploads/product/' . $v_content->options->image) }}" width="90" alt="{{ $v_content->name }}" />
                                </a>
                            </td>
                            <td class="cart_description">
                                <h4><a href="">{{ $v_content->name }}</a></h4>
                                <p>Mã sản phẩm: {{ $v_content->id }}</p>
                            </td>
                            <td class="cart_price">
                                <p>{{ number_format($v_content->price) . ' VNĐ' }}</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <!-- Form cập nhật số lượng -->
                                    <form action="{{ URL::to('/update-cart-quantity') }}" method="POST">
                                        @csrf
                                        <input type="number" min="1" name="cart_quantity" value="{{ $v_content->qty }}" class="cart_quantity_input">
                                        <input type="hidden" value="{{ $v_content->rowId }}" name="rowId_cart">
                                        <input type="submit" value="Cập nhật" name="update_qty" class="btn btn-default btn-sm">
                                    </form>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">
                                    <?php
                                    $subtotal = $v_content->price * $v_content->qty;
                                    echo number_format($subtotal) . ' VNĐ';
                                    ?>
                                </p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href="{{ URL::to('/delete-to-cart/' . $v_content->rowId) }}">
                                    <i class="fa fa-times"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section> <!--/#cart_items-->

    <!-- Tổng giá trị đơn hàng -->
    <section id="do_action">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="total_area">
                        <ul>
                            <li>Tổng <span>{{ Cart::total() . ' VNĐ' }}</span></li>
                            <li>Thuế <span>{{ Cart::tax() . ' VNĐ' }}</span></li>
                            <li>Phí vận chuyển <span>Miễn phí</span></li>
                            <li>Thành tiền <span>{{ Cart::total() . ' VNĐ' }}</span></li>
                        </ul>

                        <!-- Hiển thị nút "Thanh toán" -->
                        <?php
                        $customer_id = Session::get('customer_id');
                        if ($customer_id != NULL) { 
                        ?>
                            <a class="btn btn-default check_out" href="{{ URL::to('/checkout') }}">Thanh toán</a>
                        <?php } else { ?>
                            <a class="btn btn-default check_out" href="{{ URL::to('/login-checkout') }}">Thanh toán</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#do_action-->

      <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
      <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
      <script src="{{asset('public/frontend/js/price-range.js')}}"></script>
      <script src="{{asset('public/frontend/js/jquery.prettyPhoto.j')}}s"></script>
      <script src="{{asset('public/frontend/js/main.js')}}"></script>

    
</body>
</html>
