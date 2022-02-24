<style>
h1 {
    color: red;
}
</style>
<h1>Bạn đã đặt thành công vé</h1>
<li>Họ Tên : Đỉnh Huỳnh</li>

<hr>
<h3>Tất cả các vé</h3>
@foreach($data as $v)
<div class="col-md-3" style="float:left">
    <div class="card mb-2">
        <div class="img-qr">
            <img class="card-img-top" src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl={{$v->code}}"
                width="100px" alt="Card image cap">
        </div>
        <div class="card-body text-center">
            <h4 class="card-title">{{$v->code}}</h4>
            <p class="vecong mb-0">  Vé cổng </p>
            <p class="vecong mb-0">Ngày sử dụng: {{session('date')}}</p>
            <p class="dot my-0 font-weight-bold">---</p>

            <div class="mt-3">
                <img src="images/tick.png" width="40px" alt="">
            </div>
        </div>
    </div>
</div>
@endforeach