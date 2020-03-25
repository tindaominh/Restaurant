@extends('layout')
@section('content')

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
                    <a href="" class="btn btn-info">View</a>
                    <a href="{{ url('', $dsCustomer->id) }}" class="btn btn-success">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </form>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>
<a href="{{route('order')}}" class="btn btn-primary">Add New</a>

@endsection