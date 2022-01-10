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
                    <div class="div-right top360">
                        <div class="tiket-left-child">
                            <div class="div-tiket-child">
                            </div>
                            <div class="div-form-tiket">
                                <form action="" method="post">
                                @csrf
                                    <div class="input-f  ">
                                        <select name="pack" class="" id="select">
                                            <option value="">Gói gia đình</option>
                                        </select>
                                        <label for="select">
                                            <div class="btnselect"></div>
                                        </label>
                                    </div>
                                    <div class="input-f  ">
                                        <input type="number" name="quantily" class="qty-ticket-input"
                                            placeholder="Số lượng vé">
                                        <input type="text" name="date" id="date" class="date-ticket-input"
                                            placeholder="Ngày sử dụng" id="">
                                        <label for="date">
                                            <div class="btndate"></div>
                                        </label>
                                    </div>
                                    <div class="input-format input-f ">
                                        <input type="text" name="name" class="" placeholder="Họ và tên">
                                        @error('name')<small class="alert-danger">{{ $message }}</small>@enderror
                                    </div>
                                    <div class="input-format  input-f ">
                                        <input type="text" name="phone" class="" placeholder="Số điện thoại">
                                    </div>
                                    <div class="input-format input-f ">
                                        <input type="text" name="email" class="" placeholder="Địa chỉ Email">
                                    </div>
                                    <div class="btn-order-ticket">
                                    <button class="btnhover" type="submit" >Đặt vé ngay</button>
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