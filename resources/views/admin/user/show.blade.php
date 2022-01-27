@extends('admin.dashboard');
@section('title','Danh sách thành viên');
@section('content')
<div class="table-responsive">
    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
        <thead>
            <tr>
                <th></th>
                <th>ID</th>
                <th>Tên</th>
                <th>email</th>
                <th>mật khẩu</th>
            </tr>
        </thead>
        <tbody>
        @foreach($user as $row)
            <tr>
                <td><input type="checkbox" name="checkbox[]" class="checkbox" value="" id=""></td>
                <td>{{$row->id}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->email}}</td>
                <td>{{$row->password}}</td>
                <td><a href="delete-user/{{$row->id}}" class="btn btn-danger">Xóa</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection