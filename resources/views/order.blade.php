@extends('layout')
@section('content')
@include('errors')
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Mã order</th>
            <th scope="col">Mã khách hàng</th>
            <th scope="col">Mã menu</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Ghi chú</th>
            <th scope="col">Giá</th>
            <th scope="col" style="text-align: center;"></th>
        </tr>
    </thead>
    @foreach($order as $getorder)
    <tbody>
        <tr>
            <th scope="row">{{ $getorder->id }}</th>
            <th scope="row">{{ $getorder->customer_id }}</th>
            <td scope="row">{{$getorder->menu_id}}</td>
            <td scope="row">{{$getorder->so_luong}}</td>
            <td scope="row">{{$getorder->ghi_chu}}</td>
            <td scope="row">{{number_format($getorder->tong_tien)}} đ</td>
            <td scope="row" style="text-align: right; padding-right: 0px;">
                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    <a href="{{url('payment/'.$getorder->customer_id)}}" class="btn btn-info">Payment</a>
                    <a href="{{url('order/edit/'.$getorder->id)}}" class="btn btn-success">Edit</a>
                    <a href="{{url('/order/delete/'.$getorder->id)}}" class="btn btn-danger">Delete</a>
                </form>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>
<a href="{{asset('/all-menu')}}" class="btn btn-info">Thêm mới</a>
@endsection