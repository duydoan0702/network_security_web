@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Cập nhật sản phẩm
            </header>
            @if ($message = Session::get('message'))
                <span class="text-alert">{{ $message }}</span>
                {{ Session::put('message', null) }}
            @endif
            <div class="panel-body">
                <div class="position-center">
                    @foreach ($edit_product as $key => $pro)
                        <form role="form" action="{{ URL::to('/update_product/' . $pro->product_id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="product_name">Tên sản phẩm</label>
                                <input type="text" name="product_name" class="form-control" id="product_name" value="{{ $pro->product_name }}">
                            </div>
                            <div class="form-group">
                                <label for="product_slug">Slug</label>
                                <input type="text" name="product_slug" class="form-control" id="product_slug" value="{{ $pro->product_slug }}">
                            </div>
                            <div class="form-group">
                                <label for="product_price">Giá sản phẩm</label>
                                <input type="text" name="product_price" class="form-control" id="product_price" value="{{ $pro->product_price }}">
                            </div>
                            <div class="form-group">
                                <label for="product_image">Hình ảnh sản phẩm</label>
                                <input type="file" name="product_image" class="form-control" id="product_image">
                                <img src="{{ URL::to('public/uploads/product/' . $pro->product_image) }}" height="100" width="100">
                            </div>
                            <div class="form-group">
                                <label for="product_desc">Mô tả sản phẩm</label>
                                <textarea name="product_desc" class="form-control" id="product_desc" rows="8" style="resize: none">{{ $pro->product_desc }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="product_content">Nội dung sản phẩm</label>
                                <textarea name="product_content" class="form-control" id="product_content" rows="8" style="resize: none">{{ $pro->product_content }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="product_cate">Danh mục sản phẩm</label>
                                <select name="product_cate" class="form-control input-sm m-bot15" id="product_cate">
                                    @foreach ($cate_product as $cate)
                                        <option value="{{ $cate->category_id }}" {{ $cate->category_id == $pro->category_id ? 'selected' : '' }}>
                                            {{ $cate->category_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="product_status">Hiển thị</label>
                                <select name="product_status" class="form-control input-sm m-bot15" id="product_status">
                                    <option value="0" {{ $pro->product_status == 0 ? 'selected' : '' }}>Ẩn</option>
                                    <option value="1" {{ $pro->product_status == 1 ? 'selected' : '' }}>Hiển thị</option>
                                </select>
                            </div>
                            <button type="submit" name="update_product" class="btn btn-info">Cập nhật sản phẩm</button>
                        </form>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
