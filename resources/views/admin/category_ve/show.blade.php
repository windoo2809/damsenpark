@extends('admin.dashboard');
@section('title','Danh sách sự kiện')
@section('content')
<div class="delete_ch" style="width=120px; margin-right: 5px">
    <a href="{{url('add-category-ve')}}" class="btn btn-success mb-2 float-right" data>Thêm</a>
</div>
<div class="table-responsive">
    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
        <thead>
            <tr>
                <th></th>
                <th>ID</th>
                <th>Tên</th>
                <th>Giá</th>
            </tr>
        </thead>
        <tbody>
            @foreach($category_ve as $row)
            <tr>
                <td><input type="checkbox" name="checkbox[]" class="checkbox" value="" id=""></td>
                <td>{{$row->id}}</td>
                <td>{{$row->name}}</td>
                <td>{{number_format($row->price)}}</td>
                <td><a href="{{url('/category-ve')}}/{{$row->id}}/edit" class="btn btn-warning">Cập nhật</a></td>
                <td><a href="delete-category-ve/{{$row->id}}" class="btn btn-danger">Xóa</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection