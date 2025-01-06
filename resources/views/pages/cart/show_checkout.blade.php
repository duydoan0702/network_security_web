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
                    <li><a href="{{ URL::to('/') }}">Home</a></li>
                    <li class="active">Thanh toán giỏ hàng</li>
                </ol>
            </div>

            <div class="register-req">
                <p>Hãy đăng nhập để thanh toán giỏ hàng</p>
            </div>

            <!-- Thông tin người mua -->
            <div class="shopper-informations">
                <div class="row">
                    <div class="col-sm-12 clearfix">
                        <div class="bill-to">
                            <p>Điền thông tin gửi hàng</p>
                            <div class="form-one">
                                <form action="{{ URL::to('/save-checkout-customer') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="text" name="shipping_email" placeholder="Email" required>
                                    <input type="text" name="shipping_name" placeholder="Họ và tên" required>
                                    <input type="text" name="shipping_address" placeholder="Địa chỉ" required>
                                    <input type="text" name="shipping_phone" placeholder="Phone" required>
                                    <textarea name="shipping_notes" placeholder="Ghi chú đơn hàng của bạn" rows="4"></textarea>
                                    <div class="form-group">
                                        <label for="shipping_method">Chọn hình thức giao hàng</label>
                                        <select name="shipping_method" class="form-control input-sm m-bot15">
                                            <option value="0">Giao theo địa chỉ</option>
                                            <option value="1">Nhận tại shop</option>
                                        </select>
                                    </div>
                                    <input type="submit" value="Gửi xác nhận" name="send_order" class="btn btn-primary btn-sm">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Phương thức thanh toán -->
            <div class="payment-options">
                <span>
                    <label><input name="payment_option" type="checkbox"> Chuyển khoản</label>
                </span>
                <span>
                    <label><input name="payment_option" type="checkbox"> Tiền mặt</label>
                </span>
                <span>
                    <label><input name="payment_option" type="checkbox"> PayPal</label>
                </span>
            </div>
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