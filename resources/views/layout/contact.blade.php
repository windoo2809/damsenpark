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
        <div class="main-section pt-80">
            <div class="text-event">
                <p>Liên hệ</p>
            </div>
            <div class="container div-contact">
                <div class="contact-left">
                    <div class="sticker-boy"></div>
                    <div class="contact-left-child">
                        <div class="text-contact mb-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac mollis justo. Etiam
                            volutpat tellus quis risus volutpat, ut posuere ex facilisis.
                        </div>
                        <form action="{{route ('send.email')}}" method="post">
                        @csrf
                            <div class="form-contact w-100">
                                <div class="w-100 input-f input-cus ">
                                    <input type="text" name="name" class="input-name" placeholder="Tên">
                                    @error('name')<small class="alert-danger">{{ $message }}</small>@enderror
                                    <input type="text" name="email" class="input-email" placeholder="Email">
                                    @error('email')<small class="alert-danger">{{ $message }}</small>@enderror
                                </div>
                                <div class="w-100 input-f input-cus">
                                    <input type="text" name="phone" class="input-name" placeholder="Số điện thoại">
                                    @error('phone')<small class="alert-danger">{{ $message }}</small>@enderror
                                    <input type="text" name="address" class="input-email" placeholder="Địa chỉ">
                                    @error('address')<small class="alert-danger">{{ $message }}</small>@enderror
                                </div>
                                <div class="w-100 input-f input-cus div-input-messages mb-3 ">
                                    <textarea name="content" class="input-message w-100" placeholder="Lời nhắn"></textarea>
                                </div>
                                @error('content')<small class="alert-danger">{{ $message }}</small>@enderror
                                <div class="btn-order-ticket mt-4">
                                    <button class="btnhover" type="submit" >Gửi liên hệ</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="contact-right ">
                    <div class="box-contact-firt  mg-b">
                        <div class="box-contact-child">
                            <img src="{{asset('img/location-icon.png')}}" width="38px" height="45px" alt="">
                            <div class="text-loca">
                                Địa chỉ:
                                <p class="my-0">86/33 Âu Cơ, Phường 9, Quận Tân Bình, TP. Hồ Chí Minh</p>
                            </div>
                        </div>
                    </div>
                    <div class="box-contact-firt mg-b">
                        <div class="box-contact-child">
                            <img src="{{asset('img/icon-message.png')}}" width="35px" height="30px" alt="">
                            <div class="text-loca">
                                Địa chỉ:
                                <p class="my-0">86/33 Âu Cơ, Phường 9, Quận Tân Bình, TP. Hồ Chí Minh</p>
                            </div>
                        </div>
                    </div>
                    <div class="box-contact-firt">
                        <div class="box-contact-child">
                            <img src="{{asset('img/icon-phone.png')}}" width="38px" height="40px" alt="">
                            <div class="text-loca">
                                Địa chỉ:
                                <p class="my-0">86/33 Âu Cơ, Phường 9, Quận Tân Bình, TP. Hồ Chí Minh</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>