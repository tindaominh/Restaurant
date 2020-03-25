@extends('layout')
@section('content')

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
@if(session('alert'))
<div class="alert alert-success">
    {{session('alert')}}
</div>
@endif
<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">so ban</th>
            <th scope="col">vi tri</th>
            <th scope="col">trang thai</th>
            <th scope="col">tong tien</th>
        </tr>
    </thead>
    @foreach($dsCustomer as $dsCustomer)
    <tbody>
        <tr>
            <th scope="row">{{$dsCustomer->id}}</th>
            <td>{{$dsCustomer->so_ban}}</td>
            <td>{{$dsCustomer->vi_tri}}</td>
            <td>{{$dsCustomer->trang_thai}}</td>
            <td>{{$dsCustomer->tong_tien}}</td>
            <td>
                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    <a href="{{url('order/view',$dsCustomer->id)}}" class="btn btn-info">View</a>
                    <a href="{{url('customer/edit',$dsCustomer->id)}}" class="btn btn-success">Edit</a>
                    <a href="{{url('customer/delete',$dsCustomer->id)}}" class="btn btn-danger">Delete</a>
                </form>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>
<a href="{{route('customer_add')}}" class="btn btn-primary">Add New</a>

@endsection