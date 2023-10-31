<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" type="text/css" href="../../../../public/css/Client/search.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
          crossorigin="anonymous">
</head>
<body>
    <header class="header">
        <div class="nav">
            <nav class="info">
                <a  href="#"><i class="fa-solid fa-location-dot"></i> 150 cửa hàng khắp cả nước</a>
                <a  href="#"><i class="fa-solid fa-phone"></i> Đặt hàng: 1800.6936</a>
            </nav>
        </div>
        <div class="navbar">
            <div class="container">
            <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-12" >
                        <div class="logo">
                        <h3><a href="{{ route('client.index') }}">CoffeeShop</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12" >
                        <div class="category">
                            <a href="{{ route('all.index') }}">Cà Phê</a>
                            <a href="{{ route('all.index') }}">Trà</a>
                            <a href="{{ route('all.index') }}">Menu</a>
                            <a href="#">Chuyện nhà</a>
                            <a href="#">Cửa hàng</a>
                            <a href="#">Tuyển dụng</a>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-4 col-sm-12" >
                        <div class="cart">
                            <a href="{{ route('cart.viewCart') }}">
                                <i class='bx bxs-cart'></i>
                                <span class="badge" style="border-radius: 100%;padding: 1.5px 5px;font-size: 16px; ">
                                    {{ count((array) session('cart')) }}
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-4 col-sm-12" >
                        <div class="dropdown">
                            <button class="dropbtn"><i class='bx bxs-user-circle'></i></button>
                            <div class="dropdown-content">
                                <a href="{{route('login.logout')}}">Đăng xuất</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div class="container">
        <div class="container-lg container-fluid">
            <div class="history-wrapper">
                <h1 class="text-center tch-tracking-title mb-0">
                    <span class="icon mr-3"><i class='bx bx-history'style="color: #E57905;"></i>
                    </span>
                    <span class="text-title">Tra cứu đơn hàng</span>
                </h1> 
                <div>
                    <div class="searchform">
                        <div class="card-product-note-item">
                        <input type="text" placeholder="Tra cứu đơn hàng theo số điện thoaị" class="form-control" style="width: 450px;" required/>
                           <button>
                                <i class="fa fa-search card-product-note-icon"></i>
                           </button> 
                        </div> 
                        <div class="card-history">
                            <ul dclass="card-history-list"></ul>
                        </div>
                    </div> 
                </div> 
            </div>
        </div>    
    </div>
        
    <br>
    <footer>
        <div class="footer">
            <div class="container">
                <div class="footerinfo">
                    <div class="row">
                        <div class="col-lg-3 col-md-8 col-sm-12">
                            <div class="footercat">
                                <b>Giới thiệu</b>
                            </div>
                            <p>Về Chúng Tôi</p>
                            <p>Sản phẩm</p>
                            <p>Khuyến mãi</p>
                            <p>Chuyện cà phê</p>
                            <p>Cửa Hàng</p>
                            <p>Tuyển dụng</p>
                        </div>
                        <div class="col-lg-3 col-md-8 col-sm-12">
                            <div class="footercat">
                                <b>Giới thiệu</b>
                            </div>
                            <b>Điều khoản</b>
                            <p>Điều khoản sử dụng</p>
                            <p>Chính sách bảo mật thông tin</p>
                        </div>
                        <div class="col-lg-3 col-md-8 col-sm-12">
                            <div class="footercat">
                                <b><a href=""><i class="fa-solid fa-phone"></i> Đặt hàng: 1800 6936</a></b><br>
                                <b><a href=""><i class="fa-solid fa-location-dot"></i> Liên hệ</a></b><br>
                            </div>
                            <p>Tầng 3-4 Hub Building</p>
                            <p>195/10E Điện Biên Phủ, P.15,</p>
                            <p>Q.Bình Thạnh, TP.Hồ Chí Minh</p>
                        </div>
                        <div class="col-lg-3 col-md-8 col-sm-12">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer_col">
                            <hr>

                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 footer_col">
                            <div class="">
                                <p>Công ty cổ phần thương mại dịch vụ Trà Cà Phê VN <br>
                                    Mã số DN: 0312867172 do sở kế hoạch và đầu tư tp. HCM cấp ngày 23/07/2014. Người đại diện: NGÔ NGUYÊN KHA <br>
                                    Địa chỉ: 86-88 Cao Thắng, phường 04, quận 3, tp Hồ Chí Minh &nbsp; Điện thoại: (028) 7107 8079 &nbsp; Email: hi@thecoffeehouse.vn <br>
                                    © 2014-2022 Công ty cổ phần thương mại dịch vụ Trà Cà Phê VN mọi quyền bảo lưu</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <script src="{{ asset ('js/client/no-reload.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
