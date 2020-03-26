<?php

use Illuminate\Support\Facades\Session;
?>

@extends('layout')
@section('content')

@if(session('alert'))
<div class="alert alert-success">
    {{session('alert')}}
    <?php
    Session::put('message', null);
    ?>
</div>
@endif
<h3>Danh sach order</h3>
<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">ma khach hang</th>
            <th scope="col">ma menu</th>
            <th scope="col">so luong</th>
            <th scope="col">ghi chu</th>
            <th scope="col">tong tien</th>
        </tr>
    </thead>
    @foreach($view_order as $ds_Order)
    <tbody>
        <tr>
            <th scope="row">{{$ds_Order->id}}</th>
            <td>{{$ds_Order->customer_id}}</td>
            <td>{{$ds_Order->menu_id}}</td>
            <td>{{$ds_Order->so_luong}}</td>
            <td>{{$ds_Order->ghi_chu}}</td>
            <td>{{ $ds_Order->tong_tien}}</td>
            <td>
                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    <a href="{{url('order/edit',$ds_Order->id)}}" class="btn btn-success">Edit</a>
                    <!-- <a href="{{url('order/delete',$ds_Order->id)}}" class="btn btn-danger">Delete</a> -->
                </form>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>
@foreach($view_order as $ds_Order)
<a href="{{url('order/add',$ds_Order->customer_id)}}" class="btn btn-primary">Add New</a>
<a href="{{url('order/payment',$ds_Order->customer_id)}}" class="btn btn-primary">Payment</a>
@break
@endforeach
@endsection