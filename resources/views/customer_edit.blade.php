@extends('layout')
@section('content')

<h3>CUSTOMER</h3>
@include('errors')
@foreach($customer as $getcustomer)
<form method="POST" action="" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1">Order id</label>
        <input type="text" class="form-control" name="order_id" value="{{ $getcustomer->order_id }}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Số bàn</label>
        <input type="text" class="form-control" name="so_ban" value="{{ $getcustomer->so_ban }}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Vị trí</label>
        <input type="text" class="form-control" name="vi_tri" value="{{ $getcustomer->vi_tri }}">
    </div>
    <div class="form-group">
        <input type="hidden" name="trang_thai" min="0" max="1" value="{{ $getcustomer->trang_thai }}">
    </div>
    <div class=" form-group">
        <input type="hidden" class="form-control" name="tong_tien" value="{{ $getcustomer->tong_tien }}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endforeach
@endsection