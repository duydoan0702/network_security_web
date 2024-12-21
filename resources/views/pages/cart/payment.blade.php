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
    
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="{{URL::to('/')}}">Home</a></li>
                    <li class="active">Thanh toán giỏ hàng</li>
                </ol>
            </div>
            <div class="review-payment">
                <h2>Xem lại giỏ hàng</h2>
            </div>
            <div class="table-responsive cart_info">
                <?php
                $content = Cart::content();
                ?>
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
                        @foreach($content as $v_content)
                        <tr>
                            <td class="cart_product">
                                <a href="">
                                    <img src="{{URL::to('public/uploads/product/'.$v_content->options->image)}}" width="90" alt="{{ $v_content->name }}" />
                                </a>
                            </td>
                            <td class="cart_description">
                                <h4><a href="">{{$v_content->name}}</a></h4>
                                <p>Web ID: 1089772</p>
                            </td>
                            <td class="cart_price">
                                <p>{{number_format($v_content->price).' '.'vnđ'}}</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <form action="{{URL::to('/update-cart-quantity')}}" method="POST">
                                        @csrf
                                        <input class="cart_quantity_input" type="number" name="cart_quantity" min="1" value="{{$v_content->qty}}" >
                                        <input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart">
                                        <input type="submit" value="Cập nhật" name="update_qty" class="btn btn-default btn-sm">
                                    </form>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">
                                    <?php
                                    $subtotal = $v_content->price * $v_content->qty;
                                    echo number_format($subtotal).' '.'vnđ';
                                    ?>
                                </p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <h4 style="margin:40px 0;font-size: 20px;">Chọn hình thức thanh toán</h4>
            <form method="POST" action="{{URL::to('/order-place')}}">
                @csrf
                <div class="payment-options">
                    <span>
                        <label><input name="payment_option" value="1" type="radio"> Trả bằng thẻ ATM</label>
                    </span>
                    <span>
                        <label><input name="payment_option" value="2" type="radio"> Nhận tiền mặt</label>
                    </span>
                    <span>
                        <label><input name="payment_option" value="3" type="radio"> Thanh toán thẻ ghi nợ</label>
                    </span>
                    <input type="submit" value="Đặt hàng" name="send_order_place" class="btn btn-primary btn-sm">
                </div>
            </form>
        </div>
    </section>

    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.j')}}s"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
</body>
</html>