@extends('layout')
@section('content')
<!-- List  all -->
<div class="pt-5 menuone">
      <h3>Danh sách Order</h3>
  </div>
<table class="table table-bordered customerO">
  <thead class="thead-dark">
    <tr>
        <th scope="col">Mã Order</th>
      <th scope="col">Mã kh</th>
      <th scope="col">Menu</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Giá</th>
      <th scope="col">Quản lý</th>
    </tr>
  </thead>
  <tbody>
    @foreach($list_order as $key=>$value_order)
      <tr>
          <td>{{($value_order->order_ma)}}</td>
        <td>{{($value_order->customer_id)}}</td>
        <td>{{($value_order->menu_id)}}</td>
        <td>{{($value_order->menu_name)}}</td>
        <td>{{($value_order->menu_soluong)}}</td>
        <td><?php echo number_format($value_order->menu_price)?> đ</td>
        <td><a href="{{URL::to('/customer')}}">Back</a></td>
      </tr>
      @endforeach
  </tbody>

</table>
  <!-- End list all -->
  @endsection
