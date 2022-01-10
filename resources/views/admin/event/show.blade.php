@extends('admin.dashboard');
@section('title','Danh sách sự kiện')
@section('content')
<div class="delete_ch" style="width=120px; margin-right: 5px">
    <a href="{{url('add-event')}}" class="btn btn-success mb-2 float-right" data>Thêm</a>
</div>
<div class="table-responsive">
    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
        <thead>
            <tr>
                <th></th>
                <th>ID</th>
                <th>Tên</th>
                <th>Ảnh</th>
                <th>Giá</th>
                <th>Tóm tắt</th>
                <th>Nội dung</th>
                <th>Ngày bắt đầu</th>
                <th>Ngày kết thúc</th>
            </tr>
        </thead>
        <tbody>
            @foreach($event as $row)
            <tr>
                <td><input type="checkbox" name="checkbox[]" class="checkbox" value="" id=""></td>
                <td>{{$row->id}}</td>
                <td>{{$row->name}}</td>
                <td width="200px">
                    <img src="{{asset('img/')}}/{{$row->image}}" width="150px" height="120px">
                </td>
                <td>{{$row->price}}</td>
                <td>{{$row->summary}}</td>
                <td>{{$row->content}}</td>
                <td>{{$row->daystar}}</td>
                <td>{{$row->dayend}}</td>
                <td><a href="{{url('/event')}}/{{$row->id}}/edit" class="btn btn-warning">Cập nhật</a></td>
                <td><a href="delete-event/{{$row->id}}" class="btn btn-danger">Xóa</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection