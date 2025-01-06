@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">

    <!-- Thông tin khách hàng -->
    <div class="panel panel-default">
        <div class="panel-heading">Thông tin khách hàng</div>
        <div class="table-responsive">
            @if(Session::has('message'))
                <span class="text-alert">{{ Session::get('message') }}</span>
                {{ Session::put('message', null) }}
            @endif
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th>Tên khách hàng</th>
                        {{-- <th>Số điện thoại</th> --}}
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $customer->user_name }}</td>
                        {{-- <td>{{ $customer->user_phone }}</td> --}}
                        <td>{{ $customer->user_email }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <br>

    <!-- Thông tin vận chuyển -->
    <div class="panel panel-default">
        <div class="panel-heading">Thông tin vận chuyển</div>
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th>Tên người vận chuyển</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Ghi chú</th>
                        <th>Hình thức thanh toán</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $shipping->shipping_name }}</td>
                        <td>{{ $shipping->shipping_address }}</td>
                        <td>{{ $shipping->shipping_phone }}</td>
                        <td>{{ $shipping->shipping_email }}</td>
                        <td>{{ $shipping->shipping_notes }}</td>
                        <td>{{ $shipping->shipping_status == 0 ? 'Chuyển khoản' : 'Tiền mặt' }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <br><br>

    <!-- Chi tiết sản phẩm trong đơn hàng -->
    <div class="panel panel-default">
        <div class="panel-heading">Liệt kê chi tiết đơn hàng</div>
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá sản phẩm</th>
                        <th>Tổng tiền</th>
                    </tr>
                </thead>
                <tbody>
                    @php 
                        $i = 0;
                        $total = 0;
                    @endphp
                    @foreach($order_details as $details)
                        @php 
                            $i++;
                            $subtotal = $details->product_price * $details->product_sales_quantity;
                            $total += $subtotal;
                        @endphp
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $details->product_name }}</td>
                            <td>{{ $details->product_sales_quantity }}</td>
                            <td>{{ number_format($details->product_price, 0, ',', '.') }}đ</td>
                            <td>{{ number_format($subtotal, 0, ',', '.') }}đ</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="4"><strong>Tổng thanh toán:</strong></td>
                        <td><strong>{{ number_format($total, 0, ',', '.') }}đ</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Form cập nhật trạng thái đơn hàng -->
    <div class="col-md-6">
        <form role="form" action="{{ URL::to('/update-order/'.$order->order_id) }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="select_status">Trạng thái đơn hàng:</label>
                <select name="select_status" class="form-control">
                    <option value="1" {{ $order->order_status == 1 ? 'selected' : '' }}>Chưa xử lý</option>
                    <option value="2" {{ $order->order_status == 2 ? 'selected' : '' }}>Đã xử lý - Đã giao hàng</option>
                    <option value="3" {{ $order->order_status == 3 ? 'selected' : '' }}>Hủy đơn hàng - Tạm giữ</option>
                </select>
            </div>
            <button type="submit" class="btn btn-info">Cập nhật đơn hàng</button>
        </form>
    </div>

    <br><br>

    <!-- In đơn hàng -->
    <a target="_blank" href="{{ url('/print-order/'.$order->order_id) }}" class="btn btn-success">In đơn hàng</a>

</div>
@endsection
