@extends('layout.welcome')

@section('content')
<section>
    <div class="main-section">
        <div class="container main-content">
            <div class=" div-top">
                <div class="div-sticker1"></div>
                <div class="div-text1">
                    ĐẦM SEN <br> PARK
                </div>
                <div class="div-sticker2"></div>
                <div class="div-sticker3"></div>
                <div class="div-sticker4"> </div>
                <div class="div-sticker5"></div>
                <div class="div-ticket row mar-0">
                    <div class="div-sticker9"></div>
                    <div class="div-sticker7"></div>
                    <div class="div-sticker6"></div>
                    <div class="div-sticker8"></div>
                    <div class="div-left h-55">
                        <div class="tiket-left-child">
                            <div class="tiket-left-child-top">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac mollis justo.
                                    Etiam volutpat tellus quis risus volutpat, ut posuere ex facilisis.</p>
                                <span>
                                    Suspendisse iaculis libero lobortis condimentum gravida. Aenean auctor iaculis
                                    risus, lobortis molestie lectus consequat a.
                                </span>
                            </div>
                            <div class="tiket-left-child-bot">
                                <div class="text-line-star">
                                    <div class="div-star">
                                        <div class="star1">
                                            <div class="star2"></div>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                </div>
                                <div class="text-line-star">
                                    <div class="div-star">
                                        <div class="star1">
                                            <div class="star2"></div>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                </div>
                                <div class="text-line-star">
                                    <div class="div-star">
                                        <div class="star1">
                                            <div class="star2"></div>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                </div>
                                <div class="text-line-star">
                                    <div class="div-star">
                                        <div class="star1">
                                            <div class="star2"></div>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="div-center "></div>
                    @if (session('success'))
                    <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                        <strong> {{session('success')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="div-right top360">
                        <div class="tiket-left-child">
                            <div class="div-tiket-child">
                            </div>
                            <div class="div-form-tiket">
                                @if(Session::get('success'))
                                <div class="alert alert-success">
                                    {{Session::get('success')}}
                                </div>
                                @endif
                                @if(Session::get('fail'))
                                <div class="alert alert-danger">
                                    {{Session::get('fail')}}
                                </div>
                                @endif
                                <form action="{{url('insert-data')}}" method="post">
                                    @csrf
                                    <div class="input-f  ">
                                        <select name="category_id" class="" id="select">
                                            @php
                                            $kq = DB::select("select id, name from category_ve ");
                                            foreach ($kq as $category_ve){
                                            echo" <option value='{$category_ve->id}'>{$category_ve->name}</option> ";
                                            }
                                            @endphp
                                        </select>
                                        <label for="select">
                                            <div class="btnselect"></div>
                                        </label>
                                    </div>
                                    <div class="input-f  ">
                                        <input type="number" name="quantily" class="qty-ticket-input"
                                            placeholder="Số lượng vé" value="{{old('quantily')}}">
                                        <input type="text" name="date" id="date" class="date-ticket-input"
                                            placeholder="Ngày sử dụng" id="" value="{{old('date')}}">
                                        <label for="date">
                                            <div class="btndate"></div>
                                        </label>
                                    </div>
                                    <div class="input-format input-f ">
                                        <input type="text" name="name" class="" placeholder="Họ và tên"
                                            value="{{old('name')}}">
                                        @error('name')<small class="alert-danger">{{ $message }}</small>@enderror
                                    </div>
                                    <div class="input-format  input-f ">
                                        <input type="text" name="phone" class="" placeholder="Số điện thoại"
                                            value="{{old('phone')}}">
                                        @error('phone')<small class="alert-danger">{{ $message }}</small>@enderror
                                    </div>
                                    <div class="input-format input-f ">
                                        <input type="text" name="email" class="" placeholder="Địa chỉ Email"
                                            value="{{old('email')}}">
                                        @error('email')<small class="alert-danger">{{ $message }}</small>@enderror
                                    </div>
                                    <div class="btn-order-ticket">
                                        <button class="btnhover" type="submit">Đặt vé ngay</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection