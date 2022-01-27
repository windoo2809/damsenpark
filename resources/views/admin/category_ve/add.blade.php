<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 

@extends('admin.dashboard')
@section('title','Thêm loại vé')
@section('content')

<div class="content-wrapper">
    <div class="content mt-2">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body card-block">
                            <form action="{{route('category-ve.store')}}" method="post" enctype="multipart/form-data"
                                class="form-horizontal">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <!-- @method('PATCH') -->
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="name" class=" form-control-label">Tên </label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="name" placeholder="........"
                                            class="form-control" value="{{old('name')}} ">
                                        @error('name')<small class="alert-danger">{{ $message }}</small>@enderror
                                    </div>
                                </div>            
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="name" class=" form-control-label">Giá </label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="price" placeholder="........"
                                            class="form-control" value="{{old('price')}} ">
                                        @error('price')<small class="alert-danger">{{ $message }}</small>@enderror
                                    </div>
                                </div>                                                      
                                <br>
                                <input class="btn btn-success float-right" type="submit" value="Thêm">
                            </form>
                        </div>
                    </div><!-- .content -->
                </div><!-- .content -->
            </div><!-- .content -->
        </div><!-- .content -->
    </div><!-- .content -->
</div><!-- .content -->
@endsection