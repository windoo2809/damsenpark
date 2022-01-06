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
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    <header>
        @include('layout.header')
    </header>
    <section>
        <div class="main-section">
            <div class="container main-content">
                <div class="line-left">
                </div>
                <div class="line-right">
                </div>
                <div class="text-event">
                    <p>Sự kiện nổi bật</p>
                </div>
                <div class=" my-4">
                    <!--Carousel Wrapper-->
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    @for ($i = 0; $i < 4; $i++) <div class="col-md-3" style="float:left">
                                        <div class="card mb-2">
                                            <img class="card-img-top" src="{{url('img/')}}/{{$events[$i]->image}}"
                                                alt="Ảnh sự kiện">
                                            <div class="card-body">
                                                <h4 class="card-title">{{$events[$i]->name}}</h4>
                                                <p class="card-text">{{$events[$i]->summary}}</p>
                                                <p class="card-date">
                                                    <img src="images/calendar.png" width="18px" alt="">
                                                    {{$events[$i]->daystar}} - {{$events[$i]->dayend}}
                                                </p>
                                                <p class="card-price">{{$events[$i]->price}}đ</p>
                                                <a href="{{url('/su-kien-chi-tiet')}}/{{$events[$i]->id}}" class="card-btn btnhover">Xem chi tiết</a>
                                            </div>
                                        </div>
                                </div>
                                @endfor
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="row">
                                @for ($i > 4; $i < 8; $i++) <div class="col-md-3" style="float:left">
                                    <div class="card mb-2">
                                        <img class="card-img-top" src="{{url('img/')}}/{{$events[$i]->image}}"
                                            alt="Ảnh sự kiện">
                                        <div class="card-body">
                                            <h4 class="card-title">{{$events[$i]->name}}</h4>
                                            <p class="card-text">{{$events[$i]->summary}}</p>
                                            <p class="card-date">
                                                <img src="images/calendar.png" width="18px" alt="">
                                                {{$events[$i]->daystar}} - {{$events[$i]->dayend}}
                                            </p>
                                            <p class="card-price">{{$events[$i]->price}}đ</p>
                                            <a href="{{url('/su-kien-chi-tiet')}}/{{$events[$i]->id}}" class="card-btn btnhover">Xem chi tiết</a>
                                        </div>
                                    </div>
                            </div>
                            @endfor
                        </div>
    
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <img src="{{asset('img/previousbtn.png')}}">
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <img src="{{asset('img/nextbtn.png')}}">
                </a>
            </div>
        </div>
    </section>
</body>

</html>
<!-- <div class="col-md-3" style="float:left">
    <div class="card mb-2">
        <img class="card-img-top" src="{{url('/')}}/uploads/" alt="Card image cap">
        <div class="card-body">
            <h4 class="card-title"></h4>
            <p class="card-text"></p>
            <p class="card-date"><img src="images/calendar.png" width="18px" alt=""></p>
            <p class="card-price">đ</p>
            <a href="/su-kien-chi-tiet" class="card-btn btnhover">Xem chi tiết</a>
        </div>
    </div>
</div> -->