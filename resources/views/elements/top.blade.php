<?php
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
?>
<header id="header"><!--header-->
		
	<div class="header-middle">
		<div class="container">
			<div class="shop-menu pull-right">
				<ul class="nav navbar-nav">
					<li><a href="{{ url::to('show-cart')}}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{ URL::to('user/home') }}" class="active">Trang chủ</a></li>
								<li class="dropdown"><a href="#">Cửa hàng<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
										<li><a href="product-details.html">Product Details</a></li> 
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="cart.html">Cart</a></li> 
										<li><a href="login.html">Login</a></li> 
                                    </ul>
                                </li> 
							</ul>
						</div>
					</div>
					<div class="col-sm-8">
						<form action="{{URL::to('/tim-kiem')}}" method="POST">
							@csrf
							<div class="search_box pull-right">
								<input type="text" name="keywords_submit" placeholder="Tìm kiếm sản phẩm"/>
								<input type="submit" style="margin-top:0;color:#0c0101" name="search_items" class="btn btn-primary btn-sm" value="Tìm kiếm">
							</div>
						</form>
					</div>					
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->