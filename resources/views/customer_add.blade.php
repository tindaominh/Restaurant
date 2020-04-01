@extends('layout')
@section('content')

@include('errors')
<div class=" mt-5 center">
    <h3>Thêm khách hàng</h3>
</div>
<div class="mb-5">
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Ma order</label>
            <input type="text" class="form-control" name="order_id" value="2" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Số bàn</label>
            <input type="text" class="form-control" name="so_ban" aria-describedby="emailHelp" placeholder="Nhập số bàn">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Vị trí</label>
            <input type="text" class="form-control" name="vi_tri" placeholder="Nhập vị trí">
        </div>
        <div class="form-group">
            <input type="hidden" class="form-control" name="trang_thai" value="0">
        </div>
        <div class="form-group">
            <input type="hidden" class="form-control" value="0" name="tong_tien">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection