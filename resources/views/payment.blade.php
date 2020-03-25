@extends('layout')
@section('content')

<h3>PAYMENT</h3>
<form method="POST" action="" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1">ma khach hang</label>
        <label class="form-control" name="customer_id" placeholder="nhap ma khach hang">{{$dsCustomer->id}}</label>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">tong tien</label>
        <input type="text" class="form-control" name="tong_tien" placeholder="nhap tong tien" value="">
    </div>
    <button type="submit" class="btn btn-success" href="">Order</button>
</form>
@endsection