@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm danh mục sản phẩm
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{ URL::to('/save_category_product') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="category_product_name">Tên danh mục</label>
                            <input type="text" name="category_product_name" class="form-control" id="category_product_name" placeholder="Tên danh mục">
                        </div>
                        <div class="form-group">
                            <label for="slug_category_product">Slug</label>
                            <input type="text" name="slug_category_product" class="form-control" id="slug_category_product" placeholder="Slug">
                        </div>
                        <div class="form-group">
                            <label for="category_product_desc">Mô tả danh mục</label>
                            <textarea style="resize: none" rows="8" class="form-control" name="category_product_desc" id="category_product_desc" placeholder="Mô tả danh mục"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="category_product_keywords">Từ khóa danh mục</label>
                            <textarea style="resize: none" rows="8" class="form-control" name="category_product_keywords" id="category_product_keywords" placeholder="Từ khóa danh mục"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="category_product_status">Hiển thị</label>
                            <select name="category_status" class="form-control input-sm m-bot15">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiển thị</option>
                            </select>
                        </div>
                        <button type="submit" name="add_category_product" class="btn btn-info">Thêm danh mục</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
