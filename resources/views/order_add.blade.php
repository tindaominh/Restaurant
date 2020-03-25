@extends('layout')
@section('content')
@if($errors->any())
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
        <input type="text" class="form-control select2" name="customer_id" placeholder="nhap ma khach hang" value="">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">ma menu</label>
        <input type="text" class="form-control select2" name="menu_id" placeholder="nhap ma menu" value="{{ old('menu_id') }}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">ghi chu</label>
        <textarea class="form-control select2" name="ghi_chu" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-success" href="">Order</button>
</form>
@endsection