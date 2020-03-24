@extends('layout')
@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if(session('alert'))
<div class="alert alert-success">
    {{session('alert')}}
</div>
@endif
<form method="POST" action="" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1">ma khach hang</label>
        <input type="text" class="form-control" name="customer_id" placeholder="nhap ma khach hang">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">ma menu</label>
        <input type="text" class="form-control" name="menu_id" placeholder="nhap ma menu">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">so luong</label>
        <input type="text" class="form-control" name="so_luong" placeholder="nhap so luong">
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">ghi chu</label>
        <textarea class="form-control" name="ghi_chu" rows="3"></textarea>
    </div>
    <a class="btn btn-success" href="">Order</a>
</form>
@endsection