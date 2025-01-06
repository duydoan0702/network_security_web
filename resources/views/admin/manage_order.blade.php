@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Liệt kê đơn hàng
        </div>
        <div class="row w3-res-tb">
            <!-- <div class="col-sm-5 m-b-xs">
                <select class="input-sm form-control w-sm inline v-middle"></select>
                    <option value="0">Chọn hành động</option>
                    <option value="1">Xóa đã chọn</option>
                    <option value="2">Chỉnh sửa hàng loạt</option>
                    <option value="3">Xuất dữ liệu</option>
                </select>
                <button class="btn btn-sm btn-default">Áp dụng</button>
            </div> -->
            <div class="col-sm-4"></div>
            <div class="col-sm-3">
                <div class="input-group">
                    <input type="text" class="input-sm form-control" placeholder="Tìm kiếm">
                    <span class="input-group-btn">
                        <button class="btn btn-sm btn-default" type="button">Tìm</button>
                    </span>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            @if (Session::has('message'))
                <span class="text-alert">{{ Session::get('message') }}</span>
                {{ Session::put('message', null) }}
            @endif

            @if ($all_order->count() > 0)
                <table class="table table-striped b-t b-light">
                    <thead>
                        <tr>
                            <th style="width:20px;">
                                <label class="i-checks m-b-none">
                                    <input type="checkbox"><i></i>
                                </label>
                            </th>
                            <th>Tên người đặt</th>
                            <th>Tổng giá tiền</th>
                            <th>Tình trạng</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($all_order as $order)
                            <tr>
                                <td>
                                    <label class="i-checks m-b-none">
                                        <input type="checkbox" name="post[]"><i></i>
                                    </label>
                                </td>
                                <td>{{ $order->user_name }}</td>
                                <td>{{ number_format($order->order_total, 0, ',', '.') }} VND</td>
                                <td>
                                    @switch($order->order_status)
                                        @case(1)
                                            <span class="text-warning">Chưa xử lý</span>
                                            @break
                                        @case(2)
                                            <span class="text-success">Đã xử lý</span>
                                            @break
                                        @default
                                            <span class="text-danger">Hủy đơn hàng - Tạm giữ</span>
                                    @endswitch
                                </td>
                                <td>
                                    <a href="{{ URL::to('/view-order/' . $order->order_id) }}" class="active styling-edit" ui-toggle-class="">
                                        <i class="fa fa-eye text-primary text-active"></i>
                                    </a>
                                    <a onclick="return confirm('Bạn có chắc là muốn xóa đơn hàng không?')" href="{{ URL::to('/delete-order/' . $order->order_id) }}" class="active styling-edit" ui-toggle-class="">
                                        <i class="fa fa-trash text-danger text"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="text-center">Không có đơn hàng nào!</p>
            @endif
        </div>
        <footer class="panel-footer">
            <div class="row">
                @if ($all_order->total() > 0)
                    <div class="col-sm-5 text-center">
                        <small class="text-muted inline m-t-sm m-b-sm">Hiển thị {{ $all_order->firstItem() }}-{{ $all_order->lastItem() }} của {{ $all_order->total() }} mục</small>
                    </div>
                    <div class="col-sm-7 text-right text-center-xs">
                        {{ $all_order->links('pagination::bootstrap-4') }}
                    </div>
                @endif
            </div>
        </footer>
    </div>
</div>
@endsection
