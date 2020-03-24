@extends('admin_layout')
@section('admin_content')
<?php
  use Illuminate\Support\Facades\Session;
?>

  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách menu
    </div>
    <p class="text-align:center;">
      <?php
        $message = Session::get('message');
        if($message)
        {
          echo $message;
          Session::put('message',null);
        }
      ?>
    </p>
    <div class="table-responsive">

      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Tên menu</th>
            <th>Hình ảnh</th>
            <th>Giá</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
           @foreach($all_menu as $key => $cate_pro)
          <tr>
            <td>{{($cate_pro->menu_name)}}</td>
            <td><img src="public/fontend/images/{{($cate_pro->menu_image)}}" width="100px"></td>
            <td>{{($cate_pro->menu_price)}}</td>
            <td>
              <a href="{{URL::to('/edit-menu/'.$cate_pro->menu_id)}}" class="active" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i>
              </a>
              <a onclick="return confirm('Are you sure to delete?')" href="{{URL::to('/delete-menu/'.$cate_pro->menu_id)}}" class="active" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i>
              </a>
            </td>
          </tr>
            @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>


@endsection