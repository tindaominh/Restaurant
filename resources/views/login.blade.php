<?php
use Illuminate\Support\Facades\Session;
?>
@extends('layout')
@section('content')

<div class="pt-5" style="text-align: center;">
    <h3>Login</h3>
</div>
<div class="login p-5">
    <?php
        $ms = Session::get('message');
        if($ms)
		{
			echo '<div class="alert alert-danger center" style="text-align: center">'.$ms.'</div>';
			Session::put('message',null);
		}
    ?>
    <form action="{{URL::to('/check-login')}}" method="post">
    @csrf()
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
@endsection