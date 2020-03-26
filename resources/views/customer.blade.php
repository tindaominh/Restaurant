<?php

use Illuminate\Support\Facades\Session;
?>
@extends('layout')
@section('content')
<div class="pt-5 menuone">
    <h1>Order</h1>
</div>
@endif
@if(session('message'))
<div class="alert alert-success">
    {{session('message')}}
</div>
@endif

<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">so ban</th>
            <th scope="col">vi tri</th>
            <th scope="col">trang thai</th>
            <th scope="col">tong tien</th>
        </tr>
    </thead>
    @foreach($dsCustomer as $dsCustomer)
    <tbody>
        <tr>
            <th scope="row">{{$dsCustomer->id}}</th>
            <td>{{$dsCustomer->so_ban}}</td>
            <td>{{$dsCustomer->vi_tri}}</td>
            <td>{{$dsCustomer->trang_thai}}</td>
            <td><?php echo number_format($dsCustomer->tong_tien) ?> đ </td>
            <td>
                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    <a href="{{url('order/view',$dsCustomer->id)}}" class="btn btn-info">View</a>
                    <a href="{{url('customer/edit',$dsCustomer->id)}}" class="btn btn-success">Edit</a>
                    <!-- <a href="{{url('customer/delete',$dsCustomer->id)}}" class="btn btn-danger">Delete</a> -->
                </form>
            </td>
        </tr>
     
    <!-- <tr>
        <td colspan="4" style="text-align: right"><a href="{{URL::to('/add-khachhang')}}" class="btn btn-secondary btn-lg active mr-0" role="button" aria-pressed="true">Thêm khách hàng</a></td>
    </tr> -->
  </tbody>

</table>
  <!-- End add khach hang -->

  


@endsection