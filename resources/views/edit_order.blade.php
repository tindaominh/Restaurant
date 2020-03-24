@extends('welcome')
@section('content')
<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">so ban</label>
        <input type="text" class="form-control" name="customer_id" placeholder="nhap so ban">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">vi tri</label>
        <input type="text" class="form-control" name="menu_id" placeholder="nhap vi tri">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">so luong</label>
        <input type="text" class="form-control" name="so_luong" placeholder="nhap so luong">
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">ghi chu</label>
        <textarea class="form-control" name="ghi_chu" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">tong tien</label>
        <label type="text" class="form-control" name="tong_tien">
    </div>
    <a class="btn btn-success" href="">Order</a>
</form>
@endsection