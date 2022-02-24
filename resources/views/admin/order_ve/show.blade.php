@extends('admin.dashboard');
@section('title','Danh sách sự kiện')
@section('content')
<div class="table-responsive">
    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
        <thead>
            <tr>
                <th></th>
                <th>ID</th>
                <th>Tên</th>
                <th>ID loại vé</th>
                <th>Số lượng</th>
                <th>Điện thoại</th>
                <th>Email</th>
                <th>Ngày đặt</th>
            </tr>
        </thead>
        <tbody>
        @foreach($order_ve as $row)
            <tr>
                <td><input type="checkbox" name="checkbox[]" class="checkbox" value="" id=""></td>
                <td>{{$row->id}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->category_id}}</td>
                <td>{{$row->quantily}}</td>
                <td>{{$row->phone}}</td>
                <td>{{$row->email}}</td>
                <td>{{$row->date}}</td>
                <td><a href="delete-order/{{$row->id}}" class="btn btn-danger">Xóa</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection