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

<h3> Add Customer</h3>
<form method="POST" action="" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1">so ban</label>
        <input type="text" class="form-control" name="so_ban" placeholder="Nhap so ban" value="{{ old('so_ban') }}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Vi tri</label>
        <input type="text" class="form-control" name="vi_tri" placeholder="Nhap vi tri">
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" name="trang_thai" value="1">
        <label class="form-check-label" for="exampleCheck1" >trang thai</label>
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">ghi chu</label>
        <textarea class="form-control" name="ghi_chu" rows="3" placeholder="nhap ghi chu"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">tong tien</label>
        <input type="text" class="form-control" name="tong_tien" placeholder="">
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
</form>
@endsection