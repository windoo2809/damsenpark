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
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<header>
        <div class="navigation" id="navigation">
            <div class="container  container h-100">
                <div class="row  h-100">
                    <div class="col-sm-3 div-logo">
                        <a href="{{url('/')}}"> <img src="{{asset('img/logo.png')}}"></a>
                    </div>
                    <div class="col-sm-6 div-menu ">
                        <ul class="d-flex nav nav-header align-items-center w-100 d-flex justify-content-around  ">
                            <li class="nav-item ">
                                <a class=" nav-link  active" href="{{url('/')}}" >Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{url('su-kien')}}">Sự kiện</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  " href="{{url('lien-he')}}">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-3 d-flex div-tel align-items-center justify-content-end div-phone">
                        <a href="tel:+840123456"><i class="a-num bi bi-telephone"></i> 0123456789</a>
                    </div>
                    <div class="btn-menu" id="btn-menu">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </header>