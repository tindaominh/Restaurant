@extends('admin_layout')
@section('admin_content')
<?php
    use Illuminate\Support\Facades\session;
?>
<div class="row center">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập nhật menu
                        </header>
                        <?php
                            $message = Session::get('message');
                            if($message)
                            {
                                echo '<div class="alert alert-danger" style="text-align: center;">'.$message.'</div>';
                                Session::put('message',null);
                            }
                        ?>
                        <div class="panel-body">
                            <div class="position-center">
                                @foreach($select_menu as $key => $menu_value)
                                <form role="form" action="{{URL::to('/edit-menu-select/'.$menu_value->menu_id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                                    <input type="text" class="form-control" name="menu_name" value="{{$menu_value->menu_name}}" id="exampleInputEmail1" placeholder="Tên sản phẩm">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                                    <input type="file" class="form-control" name="menu_image" id="exampleInputEmail1">
                                    <img src="../public/fontend/images/{{$menu_value->menu_image}}" width="100px">
                                </div>                     
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá sản phẩm</label>
                                   <input type="text" class="form-control" name="menu_price" value="{{$menu_value->menu_price}}" id="exampleInput" placeholder="Giá sản phẩm">
                                </div>
                                <button type="submit" class="btn btn-info">Cập nhật phẩm</button>
                            </form>
                            @endforeach
                            </div>

                        </div>
                    </section>

        </div>
</div>
@endsection