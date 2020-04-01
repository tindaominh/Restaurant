@extends('layout')
@section('content')
<div class="menuone pt-5">
    <h1>Menu</h1>
</div>
<div class="row">
  @foreach($all_menu as $key=>$value_menu)
  <div class="col-4 mb-4">
    <div class="card card-home" style="width: 100%">
      <img src="public/fontend/images/{{$value_menu->menu_image}}" class="card-img-top" alt="..." width="100px" height="300px">
      <div class="card-body">
        <h5 class="card-title title-card">{{$value_menu->menu_name}}</h5>
        <a href="{{URL::to('/order/add/'.$value_menu->id)}}" class="btn btn-primary ">Order</a>
      </div>
    </div>
  </div>
  @endforeach

</div>
@endsection