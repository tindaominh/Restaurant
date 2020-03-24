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
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>
                <a href="" class="btn btn-success">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    </tbody>
</table>
<a href="{{route('customer_add')}}" class="btn btn-primary">Add New</a>

@endsection