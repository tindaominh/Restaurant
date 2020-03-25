@extends('layout')
@section('content')

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
@if(session('alert'))
<div class="alert alert-success">
    {{session('alert')}}
</div>
@endif
<h3> EDIT ORDER</h3>
<form action="" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1">ma khach hang</label>
        <input type="text" class="form-control select2" name="customer_id" placeholder="nhap ma khach hang" value="{{$dsOrder->customer_id}}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">ma menu</label>
        <input type="text" class="form-control select2" name="menu_id" placeholder="nhap ma menu" value="{{$dsOrder->menu_id}}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">so luong</label>
        <input type="text" class="form-control select2" name="so_luong" placeholder="nhap so luong" value="{{$dsOrder->so_luong}}">
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">ghi chu</label>
        <textarea class="form-control select2" name="ghi_chu" rows="3">{{$dsOrder->ghi_chu}}</textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">tong tien</label>
        <input type="number" class="form-control select2" name="tong_tien" placeholder="nhap tong tien" value="{{$dsOrder->tong_tien}}">
    </div>
    <button type="submit" class="btn btn-success">Update</button>
</form>

@endsection