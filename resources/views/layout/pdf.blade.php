<style>
    h1{
        color:red;
    }
    body {
    font-family: DejaVu Sans, sans-serif;
    }
    table, th, td {  
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
<body>
    
<h1>Bạn đã đặt thành công vé</h1>
<li>Họ Tên : Huỳnh Ngọc Đỉnh</li>
<li>Số điện thoại : 0388714460</li>
<li>Thời gian in :{{$ngayin}}</li>

<hr>
<h3>Tất cả các vé</h3>
                        <table class="table" >
                        <thead>
                            <tr>
                            <th scope="col">Mã vé</th>
                            <th scope="col">Loại vé</th>
                            <th scope="col">QR CODE</th>
                            <th scope="col">Hạn dùng</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($vedat as $v)
                            <tr>
                            <td >{{$v->code}}</td>
                            <td >Vé gia đình</td>
                            <td><img class="card-img-top"
                                                        src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl={{$v->code}}" width="100px"
                                                            alt="Card image cap"></td>
                            <td>Ngày sử dụng: {{session('date')}}</td>
                        @endforeach   
                        </tbody>
                        </table>
</body>