@extends('layout')
@section('content')
@include('errors')
<h3>Danh sach order</h3>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Mã khách hàng</th>
            <th scope="col">Mã menu</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Ghi chú</th>
            <th scope="col">Giá</th>
            <th scope="col"></th>
        </tr>
    </thead>
    @foreach($order as $ds_Order)
    <tbody>
        <tr>
            <td>{{$ds_Order->customer_id}}</td>
            <td>{{$ds_Order->menu_id}}</td>
            <td>{{$ds_Order->so_luong}}</td>
            <td>{{$ds_Order->ghi_chu}}</td>
            <td>{{ $ds_Order->tong_tien}}</td>
            <td>
                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    <a href="{{asset('order/edit/'.$ds_Order->id)}}" class="btn btn-success">Edit</a>
                    <a href="{{asset('order/delete/'.$ds_Order->id)}}" class="btn btn-danger">Delete</a>
                </form>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>

<a href="{{asset('/order/add/'.$ds_Order->customer_id)}}" class="btn btn-primary">Thêm order</a>
<a href="{{asset('order/payment/'.$ds_Order->customer_id)}}" class="btn btn-primary">Hóa đơn</a>

@endsection