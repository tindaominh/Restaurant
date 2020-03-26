<?php
use Illuminate\Support\Facades\Session;
?>
@extends('layout')
@section('content')

@if(session('message'))
<div class="alert alert-danger">
    {{session('message')}}
    <?php
    Session::put('message', null);
    ?>
</div>
@endif
<h3>ADD ORDER</h3>
@foreach($add_order as $key=>$cu)
<form method="POST" action="{{url('order/view',$cu->id)}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1">ma khach hang</label>
        <input type="text" class="form-control" name="customer_id" value="{{($cu->id)}}" disabled>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">ma menu</label>
        <input type="text" class="form-control" name="menu_id" placeholder="nhap ma menu" value="">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">so luong</label>
        <input type="text" class="form-control" name="so_luong" placeholder="nhap so luong" value="">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">ghi chu</label>
        <textarea class="form-control" name="ghi_chu" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">tong tien</label>
        <input type="text" class="form-control" name="tong_tien" placeholder="nhap tong tien" value="">
    </div>
    <button type="submit" class="btn btn-success" href="">Order</button>
</form>
@endforeach
@endsection