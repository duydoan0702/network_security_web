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
            <div class="review-payment text-center">
                <h2>Cảm ơn bạn đã đặt hàng tại cửa hàng của chúng tôi! Chúng tôi sẽ liên hệ với bạn sớm nhất.</h2>
            </div>
        </div>
    </section> 

    <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
        <a href="{{asset('/user/home')}}" 
            style="color: blue; width: 5%; text-decoration: none; font-weight: bold; padding: 10px; background-color: lightgray; border-radius: 5px; text-align: center;">
            Quay lại
        </a>
    </div>
    



    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.j')}}s"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>


</body>
</html>