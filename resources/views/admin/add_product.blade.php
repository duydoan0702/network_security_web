@extends('admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm sản phẩm
            </header>

            {{-- Hiển thị thông báo nếu có --}}
            @if(Session::has('message'))
                <span class="text-alert">{{ Session::get('message') }}</span>
                {{ Session::put('message', null) }}
            @endif

            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{ URL::to('/save-product') }}" 
                          method="post" enctype="multipart/form-data">
                        {{-- Token bảo mật CSRF --}}
                        {{ csrf_field() }}

                        {{-- Tên sản phẩm --}}
                        <div class="form-group">
                            <label for="product_name">Tên sản phẩm</label>
                            <input type="text" 
                                   data-validation="length" 
                                   data-validation-length="min10" 
                                   data-validation-error-msg="Làm ơn điền ít nhất 10 ký tự" 
                                   name="product_name" 
                                   class="form-control" 
                                   id="product_name" 
                                   placeholder="Tên sản phẩm">
                        </div>

                        {{-- Slug --}}
                        <div class="form-group">
                            <label for="product_slug">Slug</label>
                            <input type="text" 
                                   name="product_slug" 
                                   class="form-control" 
                                   id="product_slug" 
                                   placeholder="Slug sản phẩm">
                        </div>

                        {{-- Giá sản phẩm --}}
                        <div class="form-group">
                            <label for="product_price">Giá sản phẩm</label>
                            <input type="text" 
                                   data-validation="number" 
                                   data-validation-error-msg="Làm ơn điền số tiền" 
                                   name="product_price" 
                                   class="form-control" 
                                   id="product_price" 
                                   placeholder="Giá sản phẩm">
                        </div>

                        {{-- Hình ảnh sản phẩm --}}
                        <div class="form-group">
                            <label for="product_image">Hình ảnh sản phẩm</label>
                            <input type="file" 
                                   name="product_image" 
                                   class="form-control" 
                                   id="product_image">
                        </div>

                        {{-- Mô tả sản phẩm --}}
                        <div class="form-group">
                            <label for="product_desc">Mô tả sản phẩm</label>
                            <textarea style="resize: none" 
                                      rows="8" 
                                      class="form-control" 
                                      name="product_desc" 
                                      id="product_desc" 
                                      placeholder="Mô tả sản phẩm"></textarea>
                        </div>

                        {{-- Nội dung sản phẩm --}}
                        <div class="form-group">
                            <label for="product_content">Nội dung sản phẩm</label>
                            <textarea style="resize: none" 
                                      rows="8" 
                                      class="form-control" 
                                      name="product_content" 
                                      id="product_content" 
                                      placeholder="Nội dung sản phẩm"></textarea>
                        </div>

                        {{-- Danh mục sản phẩm --}}
                        <div class="form-group">
                            <label for="product_cate">Danh mục sản phẩm</label>
                            <select name="product_cate" class="form-control input-sm m-bot15">
                                @foreach($cate_product as $cate)
                                    <option value="{{ $cate->category_id }}">
                                        {{ $cate->category_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Trạng thái hiển thị --}}
                        <div class="form-group">
                            <label for="product_status">Hiển thị</label>
                            <select name="product_status" class="form-control input-sm m-bot15">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiển thị</option>
                            </select>
                        </div>

                        {{-- Nút Thêm sản phẩm --}}
                        <button type="submit" 
                                name="add_product" 
                                class="btn btn-info">
                            Thêm sản phẩm
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection
