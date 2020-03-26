<?php
  use Illuminate\Support\Facades\Session;
?>

@extends('layout')
@section('content')
<div class="pt-5 menuone">
    <h1>Order</h1>
</div>
<?php
  $message = Session::get('message');
  if($message)
  {
    echo '<div class="alert alert-danger">'.$message.'</div>';
    Session::put('message',null);
  }
?>
<!-- Add menu  -->
<table class="table table-bordered customerO">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Tên món</th>
      <th scope="col">Hình ảnh</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Giá</th>
      <th style="width:30px;"></th>
    </tr>
  </thead>
  <tbody>
      @foreach($allgiohang as $key=>$value_giohang)
    <tr>
      <td>{{$value_giohang->giohang_name}}</td>
      <td><img src="public/fontend/images/{{$value_giohang->giohang_image}}" width="100px"></td>
      <td>
          <input type="number" min="1" value="{{$value_giohang->giohang_soluong}}">
      </td>
      <td><?php echo number_format($value_giohang->giohang_gia)?> đ</td>

      <td >
              <a onclick="return confirm('Are you sure to delete?')" href="{{URL::to('/del-giohang/'.$value_giohang->giohang_id)}}" class="active" ui-toggle-class="">
              Xóa
              </a>
      </td>
      
    </tr>
    @endforeach

  </tbody>

</table>
<!-- End add mennu -->

<!-- Add khach hang -->
  <div class="">
      <h3>Danh sách khách hàng</h3>
  </div>
<table class="table table-bordered customerO">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Mã kh</th>
      <th scope="col">Số bàn</th>
      <th scope="col">Vị trí</th>
      <th scope="col">Note</th>
      <th scope="col">Quản lý</th>
    </tr>
  </thead>
  <tbody>
    @foreach($khachhang as $key=>$value_khachhang)
      <tr>
        <td>{{($value_khachhang->customer_id)}}</td>
        <td>{{($value_khachhang->customer_soban)}}</td>
        <td>{{($value_khachhang->customer_vitri)}}</td>
        <td><?php
                if($value_khachhang->customer_note == 0)
                {
                  echo 'Chưa thanh toán.';
                }else
                {
                  echo 'Đã thanh toán.';
                }
            ?>
        </td>
        <td>
          <a href="{{URL::to('/select-order/'.$value_khachhang->customer_id)}}">List order || </a>
          <a href="{{URL::to('/add-cart/'.$value_khachhang->customer_id)}}">Order || </a>
          <a href="{{URL::to('/all-menu')}}">Add Cart || </a>
          <a onclick="return confirm('Bạn muốn thanh toán?')" href="{{URL::to('/payment/'.$value_khachhang->customer_id)}}">Payment</a>
        </td>
      </tr>
      @endforeach
        <tr>
<<<<<<< HEAD
            <td colspan="5" style="text-align: right"><a href="{{URL::to('/add-khachhang-new')}}" class="btn btn-secondary btn-lg active mr-0" role="button" aria-pressed="true">Thêm mới</a></td>
=======
            <th scope="row">{{$dsCustomer->id}}</th>
            <td>{{$dsCustomer->so_ban}}</td>
            <td>{{$dsCustomer->vi_tri}}</td>
            <td>{{$dsCustomer->trang_thai}}</td>
            <td><?php echo number_format($dsCustomer->tong_tien) ?>d</td>
            <td>
                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    <a href="{{url('order/view',$dsCustomer->id)}}" class="btn btn-info">View</a>
                    <a href="{{url('customer/edit',$dsCustomer->id)}}" class="btn btn-success">Edit</a>
                    <!-- <a href="{{url('customer/delete',$dsCustomer->id)}}" class="btn btn-danger">Delete</a> -->
                </form>
            </td>
>>>>>>> b52558ea69424c1ec142063b2cb6002d89b3f976
        </tr>
     
    <!-- <tr>
        <td colspan="4" style="text-align: right"><a href="{{URL::to('/add-khachhang')}}" class="btn btn-secondary btn-lg active mr-0" role="button" aria-pressed="true">Thêm khách hàng</a></td>
    </tr> -->
  </tbody>

</table>
  <!-- End add khach hang -->

  


@endsection