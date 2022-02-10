@extends('admin.dashboard');
@section('title','Danh sách thanh toán');
@section('content')
<div class="table-responsive">
    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
        <thead>
            <tr>
                <th></th>
                <th>ID</th>
                <th>order_ve_id</th>
                <th>number_card</th>
                <th>name_card</th>
                <th>date_card</th>
                <th>CVV_CVC</th>
                <th>trạng thái</th>
            </tr>
        </thead>
        <tbody>
        @foreach($payment as $row)
            <tr>
                <td><input type="checkbox" name="checkbox[]" class="checkbox" value="" id=""></td>
                <td>{{$row->id}}</td>
                <td>{{$row->order_ve_id}}</td>
                <td>{{$row->number_card}}</td>
                <td>{{$row->name_card}}</td>
                <td>{{$row->date_card}}</td>
                <td>{{$row->CVV_CVC}}</td>
                <td><a href="delete-user/{{$row->id}}" class="btn btn-danger">Xóa</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection