<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đầm sen park</title>
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
                <div class="text-event">
                    <p>Thanh toán</p>
                </div>
                <div class=" div-top">
                    <div class="div-ticket h490px payment-content row h-payment ">
                        <div class="sticker-girl1">
                        </div>
                        <div class="div-left ">
                            <div class="vecuaban"></div>
                            <div class="tiket-left-child pl-5 pr-5 pad-5">
                                <div class="d-flex pl-5  justify-content-between mt-5 block">
                                    <div class="div-input-price input-f d-block">
                                        <label for="" class="w-100">Số tiền thanh toán</label>
                                        <input type="text" name="" class="">
                                    </div>
                                    <div class="div-input-qty input-f d-inline">
                                        <label for="" class="w-100 ">Số lượng vé</label>
                                        <input type="text" name="" class=""> <span> vé</span>
                                    </div>
                                    <div class="div-input-date input-f d-block">
                                        <label class="w-100" for="">Ngày sử dụng</label>
                                        <input type="date" name="" class="">
                                    </div>
                                </div>
                                <div class="tt-lienhe mt-4 pl-5 input-f d-block ">
                                    <label class="w-100" for="">Thông tin liên hệ</label>
                                    <input type="text" name="" class="input-ttlh">
                                </div>
                                <div class="tt-lienhe mt-5 pl-5 input-f d-block ">
                                    <label class="w-100" for="">Điện thoại</label>
                                    <input type="text" name="" class="input-ttlh">
                                </div>
                                <div class="tt-lienhe mt-5 pl-5 input-f d-block ">
                                    <label class="w-100" for="">Email</label>
                                    <input type="text" name="" class="input-ttlh">
                                </div>
                            </div>
                        </div>
                        <div class="div-center stiker-custom "></div>
                        <div class="div-right h700px">
                            <div class="tiket-left-child">
                                <div class="sticker-payment">
                                </div>
                                <div class="div-form-tiket p-2">
                                    <form action="#">
                                        <div class="tt-lienhe mt-5 input-f d-block ">
                                            <label class="w-100" for="">Số thẻ</label>
                                            <input type="text" name="" class="w-100  ">
                                        </div>
                                        <div class="tt-lienhe mt-5 input-f d-block ">
                                            <label class="w-100" for="">Họ tên chủ thẻ</label>
                                            <input type="text" name="" class="w-100 ">
                                        </div>
                                        <div class="tt-lienhe   input-f mt-5 d-block  ">
                                            <label class="w-100" for="">Họ tên chủ thẻ</label>
                                            <div class=" d-flex tt-lienhe   input-f ">
                                                <input type="text" name="" id="date" class="date-ticket-input w40"
                                                    placeholder="Ngày sử dụng" id="">
                                                <label for="date">
                                                    <div class="btndate"></div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="tt-lienhe my-5   input-f d-block">
                                            <label for="" class="w-100 ">CVV/CVC</label>
                                            <input type="text" name="" class="">
                                        </div>
                                        <div class="btn-order-ticket mt-5">
                                            <a href="payment-success.html" class="mt-2 btnhover">Thanh toán</a>
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
</body>

</html>