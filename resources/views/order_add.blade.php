@extends('layout')
@section('content')
<h3>ADD ORDER</h3>
@include('errors')

@foreach($menu as $dsmenu)
<form method="POST" action="" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1">Mã khách hàng</label>
        <input type="text" class="form-control" name="customer_id" value="{{old('customer_id')}}" placeholder="Nhap ma khach hang">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Mã menu</label>
        <input type="text" class="form-control" name="menu_id" value="{{$dsmenu->id}}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Số lượng</label>
        <input type="number" class="form-control" name="so_luong" min=1>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Ghi chú</label>
        <textarea class="form-control" name="ghi_chu" rows="3">Chưa ghi chú</textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Giá menu</label>
        <input type="text" class="form-control" name="tong_tien" value="{{$dsmenu->menu_price}}">
    </div>
    <button type="submit" class="btn btn-success" >Thêm order</button>
</form>
@endforeach
@endsection