<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ĐẦM SEN PARK</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
</head>

<body>
    @include('layout.header');
    <section>
        <div class="main-section">
            <div class="text-event">
                <p>Thanh toán thành công</p>
            </div>
            <div class="container div-contact">
            @if (session('success'))
                <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                    <strong> {{session('success')}}</strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <div class="contact-left w-100 h1500px">
                    <div class="sticker-girl2"></div>
                    <div class="contact-left-child p-5 pad-5">
                        <div class="px-3 w-100 h-100">
                            <div class=" my-0">
                                <!--Carousel Wrapper-->
                                <div id="multi-item-example" class="carousel slide carousel-multi-item"
                                    data-ride="carousel">
                                    <div class="controls-top">
                                        <a class=" btn-prev btnprev" href="#multi-item-example" data-slide="prev"><img
                                                src="images/previousbtn.png" width="38px" alt=""></a>
                                        <a class=" btn-next btnnext" href="#multi-item-example" data-slide="next"><img
                                                src="images/nextbtn.png" width="38px" alt=""></a>
                                    </div>
                                    <div class="carousel-inner" role="listbox">
                                        @php
                                        $row = count(session('vedat'));
                                        $v=Session::get('vedat');
                                        @endphp
                                        @if($row <= 4) <div class="carousel-item active">
                                            @foreach(session('vedat') as $v)
                                            <div class="col-md-3" style="float:left">
                                                <div class="card mb-2">
                                                    <div class="img-qr">
                                                        <img class="card-img-top"
                                                            src="https://chart.googleapis.com/chart?chs=100x100&cht=qr&chl={{$v->code}}"
                                                            width="100px" alt="Card image cap">
                                                    </div>
                                                    <div class="card-body text-center">
                                                        <h4 class="card-title">{{$v->code}}</h4>
                                                        <p class="vecong mb-0">Vé cổng</p>
                                                        <p class="dot my-0 font-weight-bold">---</p>
                                                        <div class="mt-3">
                                                            <img src="images/tick.png" width="40px" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                    </div>
                                    @elseif( $row <= 8 && $row> 4)
                                        <div class="carousel-item active">
                                            @for ($i = 0; $i < 4; $i++) <div class="col-md-3" style="float:left">
                                                <div class="card mb-2">
                                                    <div class="img-qr">
                                                        <img class="card-img-top"
                                                            src="https://chart.googleapis.com/chart?chs=100x100&cht=qr&chl={{$v[$i]->code}}"
                                                            width="100px" alt="Card image cap">
                                                    </div>
                                                    <div class="card-body text-center">
                                                        <h4 class="card-title">{{$v[$i]->code}}</h4>
                                                        <p class="vecong mb-0">Vé cổng</p>
                                                        <p class="dot my-0 font-weight-bold">---</p>
                                                        <div class="mt-3">
                                                            <img src="images/tick.png" width="40px" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        @endfor
                                </div>
                                <div class="carousel-item ">
                                    @for ($i = 4; $i < $row; $i++) <div class="col-md-3" style="float:left">
                                        <div class="card mb-2">
                                            <div class="img-qr">
                                                <img class="card-img-top"
                                                    src="https://chart.googleapis.com/chart?chs=100x100&cht=qr&chl={{$v[$i]->code}}"
                                                    width="100px" alt="Card image cap">
                                            </div>
                                            <div class="card-body text-center">
                                                <h4 class="card-title">{{$v[$i]->code}}</h4>
                                                <p class="vecong mb-0">Vé gia đình</p>
                                                <p class="dot my-0 font-weight-bold">---</p>
                                                <div class="mt-3">
                                                    <img src="images/tick.png" width="40px" alt="">
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                @endfor
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="qty-payment float-left">
                    Số lượng: {{session('quantily')}} vé
                </div>
                <div class="qty-payment float-right">
                    Trang 1/1
                </div>
            </div>
        </div>
        <div class="btn-double text-center mt-5">
            <a href="{{url('/in-ve/{id}')}}" class="card-btn btnhover"> Tải về </a>
            <a href="javascript:void(0)" id="btn-send-email" data-toggle="modal" data-target="#exampleModal"
                class="card-btn ml-3 btnhover marign-0">Gửi Email</a>
        </div>
        </div>
        </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-s1">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nhập Email để nhận vé</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route ('send.emails')}}" method="post">
                            @csrf
                            <div class="col-sm-12 input-f input-cus d-block h-auto">
                                <input type="email" name="email" required="" class="w-100" value=" @if (session('email'))
                                    {{session("email")}} 
                                @endif"
                                    placeholder="Email">
                                <span class="name-contact-warning">​ </span>
                                <div class="modal-footer">
                                    <button type="button" class="card-btn bg-s2" data-dismiss="modal">Đóng</button>
                                    <button type="submit" class="card-btn btnhover">Gửi Email</button>
                                </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <script src="assets/js/custom.js"></script>
</body>

</html>
<script>
$(document).ready(() => {
    $(".bgr-dark").click(() => {
        $(".bgr-dark").hide();
    });
});
</script>
<script src="assets/js/custom.js"></script>
</body>

</html>