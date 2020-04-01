@extends('layout')
@section('content')
<h3>EDIT ORDER</h3>
@include('errors')
@foreach($order as $getorder)
<form method="POST" action="" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1">Mã khách hàng</label>
        <input type="text" class="form-control" name="customer_id" value="{{$getorder->customer_id}}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Mã menu</label>
        <input type="text" class="form-control" name="menu_id" value="{{$getorder->id}}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Số lượng</label>
        <input type="number" class="form-control" name="so_luong" min=1 value="{{$getorder->so_luong}}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Ghi chú</label>
        <textarea class="form-control" name="ghi_chu" rows="3">{{$getorder->ghi_chu}}</textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Giá menu</label>
        <input type="text" class="form-control" name="tong_tien" value="{{$getorder->tong_tien}}">
    </div>
    <button type="submit" class="btn btn-success">Save</button>
</form>
@endforeach

@endsection