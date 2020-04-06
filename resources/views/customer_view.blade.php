@extends('layout')
@section('content')
@include('errors')
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Mã khách hàng</th>
            <th scope="col">Mã order</th>
            <th scope="col">số bàn</th>
            <th scope="col">vị trí</th>
            <th scope="col">trạng thái</th>
            <th scope="col">tổng tiền</th>
            <th scope="col"></th>
        </tr>
    </thead>
    @foreach($customer as $getcustomer)
    <tbody>
        <tr>
            <th scope="row">{{$getcustomer->id}}</th>
            <td>{{$getcustomer->order_id}}</td>
            <td>{{$getcustomer->so_ban}}</td>
            <td>{{$getcustomer->vi_tri}}</td>
            <td>{{$getcustomer->trang_thai}}</td>
            <td>{{$getcustomer->tong_tien==0?'Chưa thanh toán':number_format($getcustomer->tong_tien).' đ'}} </td>
            <td style="text-align:right; padding-right: 0px;">
                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    <a href="{{url('/customer')}}" class="btn btn-info">Back</a>
                    <a href="{{url('/customer/edit/'.$getcustomer->id)}}" class="btn btn-success">Edit</a>
                    <a href="{{url('/customer/delete/'.$getcustomer->id)}}" class="btn btn-danger">Delete</a>
                </form>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>
<a href="{{asset('customer/add')}}" class="btn btn-info">Thêm mới</a>
@endsection