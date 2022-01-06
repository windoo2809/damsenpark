<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ĐẦM SEN PARK</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
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
                @foreach ($events as $row)
                <div class="text-event">
                    <p>   {{$row->name}} </p>
                </div>
                <div class="event-detail-content  ">
                    <div class="event-detail-child ">
                        <div class="event-detail-left ">
                            <img src="{{asset('img/sukien1.png')}}" alt="">
                            <p class="card-date pt-3"><img src="{{asset('img/calendar.png')}}" width="18px" alt="">
                                {{$row->daystar}} -
                                {{$row->dayend}}</p>
                            <p class="card-text py-2">   {{$row->summary}} </p>
                            <p class="card-price">   {{$row->price}} VNĐ</p>
                        </div>
                        <div class=" event-detail-right row mar-0">
                            <div class="col-sm-4">
                                <span class="hightlight">{{$row->titlecontent}}</span>
                                {{$row->content}}
                            </div>
                            <div class=" col-sm-4 ">
                                <img class="img-100" src="{{asset('img/sukien2.png')}}" alt="">
                                <div class="text-col-second mt-4">
                                {{$row->content1}}
                                </div>
                            </div>
                            <div class=" col-sm-4 ">
                                <div class="text-col-second mb-4">
                                {{$row->content1}}
                                </div>
                                <img class="img-100" src="{{asset('img/sukien2.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
    </section>
</body>

</html>