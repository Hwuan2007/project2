<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" type="text/css" href="../../../../public/css/Client/change.css">
    <link rel="stylesheet" type="text/css" href="{{ asset ('js/client/checkbox.js') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('js/client/thumbnail.js') }}">
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
                    <div class="col-lg-3 col-md-4 col-sm-12" >
                        <div class="logo">
                            <h3>CoffeeShop</h3>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-12" style="margin-bottom: unset !important;">
                        <div class="category">
                            <a href="#">Cà Phê</a>
                            <a href="#">Trà</a>
                            <a href="{{ route('drink.index') }}">Menu</a>
                            <a href="#">Chuyện nhà</a>
                            <a href="#">Cửa hàng</a>
                            <a href="#">Tuyển dụng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="name-drink-to-change">
            <h4> Thay đổi thông tin sản phẩm: <b> Phê Sữa Đá</b></h4>
        </div>
    </div>

    <div class="container">
        <div class=" drink-info">
            <div class="row">
                <div class="col-lg-6 col-md-4 col-sm-12" >
                    <div class="drink-img">
                        <div class="carousel">
                            <!-- Carousel -->
                            <div id="demo" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <!-- <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button> -->
                                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1" class="active"></button>
                                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2" class="active"></button>
                                </div>

                                <div class="carousel">
                                    <div class="carousel-item active">
                                      <img src="https://product.hstatic.net/1000075078/product/1669736835_ca-phe-sua-da_65455a230ffb49499a455e3350e66158.png" alt="Image 1" class="d-block w-100">
                                    </div>
                                    <div class="carousel-item">
                                      <img src="https://product.hstatic.net/1000075078/product/1645963560_ca-phe-sua-da-min_a5596fa0948640fb9196524f815a754b.png" alt="slide-2" class="d-block w-100">
                                    </div>
                                </div>


                                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                     <div class="container">
                        <div id="thumbCarousel">
                            <div data-target="#productCarousel" data-slide-to="0" class="thumb active">
                                <img src="https://product.hstatic.net/1000075078/product/1669736835_ca-phe-sua-da_65455a230ffb49499a455e3350e66158.png">
                            </div>
                            <div data-target="#productCarousel" data-slide-to="1" class="thumb">
                                <img src="https://product.hstatic.net/1000075078/product/1645963560_ca-phe-sua-da-min_a5596fa0948640fb9196524f815a754b.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-12" >
                    <div>
                        <div class="drink-order">
                        <div class="drink-name-detail"><b> Cà Phê Sữa Đá </b></div>
                        <div class="drink-cost"><b> 45.000 đ </b></div>
                        <br>
                        <div class="pick-size"> Chọn size (bắt buộc) </div><br>
                        <div class="pick-size-button">
                            <button type="button" class="color-change-pick-size-button" onclick="changeColor(this)"><i class='bx bx-coffee-togo'> Nhỏ + 0 đ </i></button>
                            <button type="button" class="color-change-pick-size-button" onclick="changeColor(this)"><i class='bx bx-coffee-togo'> Vừa + 10.000 đ </i></button>
                            <button type="button" class="color-change-pick-size-button" onclick="changeColor(this)"><i class='bx bx-coffee-togo'> Lớn + 16.000 đ </i></button>
                        </div>
                        <br>
                        <div class="pick-topping">Topping</div><br>
                        <div class="pick-topping-button">
                            <input type="checkbox" name="color" id="color1">
                            <label for="color1" class="color-change-pick-topping-button">Kem Phô Mai Macchiato + 10.000 đ</label>

                            <input type="checkbox" name="color" id="color2">
                            <label for="color2" class="color-change-pick-topping-button">hort Espresso  + 10.000 đ</label>

                            <input type="checkbox" name="color" id="color3">
                            <label for="color3" class="color-change-pick-topping-button">Trân Châu Trắng  + 10.000 đ</label>

                            <input type="checkbox" name="color" id="color4">
                            <label for="color4" class="color-change-pick-topping-button">Sốt Caramel + 10.000 đ</label>

                            <input type="checkbox" name="color" id="color5">
                            <label for="color5" class="color-change-pick-topping-button">Thạch Caffe  + 10.000 đ</label>

                        </div>
                    <br>
                    <br>
                    <div class="order">
                        <button type="button" id="btn-order"><i class='bx bx-cart-alt' style="font-size: 20px;"></i> <b> Cập Nhật Giỏ Hàng</b> </button>
                    </div>

                    </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
   
    <br>

    <div class="container">
        <hr>
        <div>
            <p style="font-size: 18px;"><b>Mô tả sản phẩm</b></p>
            <p>Cà phê Đắk Lắk nguyên chất được pha phin truyền thống kết hợp với sữa đặc tạo nên hương vị đậm đà,
                hài hòa giữa vị ngọt đầu lưỡi và vị đắng thanh thoát nơi hậu vị.</p>
        </div>
        <hr>
    </div>


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

    <script src="../../../../public/js/client/changecolor.js"></script>
    <script src="../../../../public/js/client/thumbnail.js"></script>
    <script src="../../../../public/js/client/checkbox.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
