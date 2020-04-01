@extends('layout')
@section('content')

@include('errors')
<table class="table" style="margin-top: 50px;">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Mã khách hàng</th>
            <th scope="col">Ma order</th>
            <th scope="col">Số bàn</th>
            <th scope="col">Vị trí</th>
            <th scope="col">Tong tien</th>
            <th scope="col"></th>
        </tr>
    </thead>
    @foreach($customer as $getcustomer)
    <tbody>
        <tr>
            <th scope="row">{{$getcustomer->id}}</th>
            <td>{{$getcustomer->order_id}}</td>
            <td>{{$getcustomer->so_ban}}</td>
            <td>{{$getcustomer->vi_tri}}</td>
            <td>{{number_format($getcustomer->tong_tien * $getcustomer->so_luong)}}</td>
            <td style="text-align: right;">
                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    <a href="{{ url('customer/view/'.$getcustomer->id) }}" class="btn btn-info">View</a>
                    <a href="{{ url('customer/edit/'.$getcustomer->id) }}" class="btn btn-success">Edit</a>
                    <a href="{{ url('customer/delete/'.$getcustomer->id) }}" class="btn btn-danger">Delete</a>
                </form>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>

<a href="{{asset('customer/add')}}" class="btn btn-info">Thêm mới</a>


@endsection