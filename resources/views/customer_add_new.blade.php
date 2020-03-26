@extends('layout')
@section('content')
<div class=" mt-5 center">
    <h2>Thêm khách hàng</h2>
</div>
<div class="mb-5">
    <form action="{{URL::to('/save-khachhang')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Số bàn</label>
        <input type="text" class="form-control" name="soban" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Số bàn">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Vị trí</label>
        <input type="text" class="form-control" name="vitri" id="exampleInputPassword1" placeholder="Vị trí">
    </div>
    <!-- <div class="form-group">
        <label for="exampleInputPassword1">Thanh toán</label>
        <input type="number" max="1" min="0" class="form-control" name="note" id="exampleInputPassword1" placeholder="Đã thanh toán chưa">
    </div> -->

    <button type="submit" class="btn btn-primary">Thêm mới</button>
    </form>
</div>
@endsection