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
<h3> EDIT CUSTOMER</h3>
<form method="POST" action="" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1">so ban</label>
        <input type="text" class="form-control" name="so_ban" placeholder="Nhap so ban" value="{{ $dsCustomer->so_ban }}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Vi tri</label>
        <input type="text" class="form-control" name="vi_tri" value="{{ $dsCustomer->vi_tri }}">
    </div>
    <div class="form-group">
        <input type="number" name="trang_thai" min="0" max="1" value="{{ $dsCustomer->trang_thai }}">
        <label>trang thai</label>
    </div>

    <div class=" form-group">
        <label for="exampleFormControlInput1">tong tien</label>
        <input type="text" class="form-control" name="tong_tien" value="{{ $dsCustomer->tong_tien }}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection