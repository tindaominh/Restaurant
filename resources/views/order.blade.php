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
<h3>ODER</h3>
<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1">ma khach hang</label>
        <input type="text" class="form-control select2" name="customer_id" placeholder="nhap ma khach hang">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">ma menu</label>
        <input type="text" class="form-control select2" name="menu_id" placeholder="nhap ma menu">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">so luong</label>
        <input type="text" class="form-control select2" name="so_luong" placeholder="nhap so luong">
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">ghi chu</label>
        <textarea class="form-control select2" name="ghi_chu" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">tong tien</label>
        <input type="number" class="form-control select2" name="tong_tien" placeholder="nhap tong tien">
    </div>
    <button type="submit" class="btn btn-success" >Order</button>
</form>

@endsection