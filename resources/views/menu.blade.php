@extends('layout')
@section('content')
<div class="h3 pt-5">
    Menu
</div>
<div class="row">
  @foreach($all_menu as $key=>$value_menu)
  <div class="card col-4" style="width: 90%">
    <img src="public/fontend/images/{{$value_menu->menu_image}}" class="card-img-top" alt="..." width="100px" height="300px">
    <div class="card-body">
      <h5 class="card-title">{{$value_menu->menu_name}}</h5>
      <a href="{{URL::to('/order/'.$value_menu->menu_id)}}" class="btn btn-primary">Order</a>
    </div>
  </div>
  @endforeach

</div>
@endsection