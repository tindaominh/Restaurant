@extends('welcome')
@section('content')
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
    <div class="form-group">
        <label for="exampleFormControlInput1">Trang thai</label>
        <label type="text" class="form-control" name="trang_thai" placeholder=""></label>
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">ghi chu</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">tong tien</label>
        <label type="text" class="form-control" id="exampleFormControlInput1" placeholder=""></label>
    </div>
    <a href="" class="btn btn-primary">Save</a>
</form>
@endsection