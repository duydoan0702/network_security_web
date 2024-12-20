<div class="left-sidebar">
	<h2>Danh mục sản phẩm</h2>
	<div class="panel-group category-products" id="accordian">
	<!--category-product-->
	@foreach($category as $key => $cate)
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a href="{{ URL::to('/danh-muc-san-pham/' . $cate->slug_category_product) }}">
						{{ $cate->category_name }}
					</a>
				</h4>
			</div>
		</div>
	@endforeach
	<!--/category-products-->
		<!--			
		<div class="brands-name">
			<ul class="nav nav-pills nav-stacked">
				<li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
				<li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
				<li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
				<li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
				<li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
				<li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
				<li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
			</ul>
		</div>
	</div>-->
	<!--/brands_products-->
						
	<div class="price-range"><!--price-range-->
		<h2>Khoảng giá</h2>
		<div class="well text-center">
				<input type="text" class="span2" value="" data-slider-min="0" data-slider-max="50000000" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
				<b class="pull-left">$ 0</b> <b class="pull-right">$ 50000000</b>
		</div>
	</div><!--/price-range-->
								
</div></div> 