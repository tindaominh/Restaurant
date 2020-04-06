
<?php
    use Illuminate\Support\Facades\Session;
?>
@extends('layout')
@section('content')
<!-- List  all -->
<div class="pt-5 menuone">
      <h3>Danh sách Payment</h3>
  </div>
<?php
    $message = Session::get('message');
    if($message)
    {
        echo '<div class="alert alert-danger">'.$message.'</div>';
        Session::put('message',null);
    }
?>
<table class="table table-bordered customerO">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Mã thanh toán</th>
      <th scope="col">Mã kh</th>
      <th scope="col">Số bàn</th>
      <th scope="col">Vị trí</th>
      <th scope="col">Tổng tiền</th>
      <th scope="col">Quản lý</th>
    </tr>
  </thead>
  <tbody>
    @foreach($payment as $key=>$value_order)
      <tr>
        <td>{{($value_order->id)}}</td>
        <td>{{($value_order->customer_id)}}</td>
        <td>{{($value_order->customer_soban)}}</td>
        <td>{{($value_order->customer_vitri)}}</td>
        <td><?php echo number_format($value_order->payment_total)?> đ</td>
        <td><a href="{{URL::to('/customer')}}">Back</a></td>
      </tr>
      @endforeach
  </tbody>

</table>
  <!-- End list all -->
 @endsection

