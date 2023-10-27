<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drink Detail</title>
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/client/drink_detail.css') }}">
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
    </header>
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
        </div>
    <div class="container">
        <div class="previous">
            <a href="{{ route('all.index') }}"> Menu </a> / <span> @foreach( $categories as $category ) {{ $category -> categories_name }} @endforeach </span> / {{ $drink -> drk_name }}
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
                                          <img src="{{ asset(\Illuminate\Support\Facades\Storage::url('Admin/') . $drink -> drk_img) }}" alt="Image 1" class="d-block w-100">
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
                                    <img src="{{ asset(\Illuminate\Support\Facades\Storage::url('Admin/') . $drink -> drk_img) }}">
                                </div>
                                <div data-target="#productCarousel" data-slide-to="1" class="thumb">
                                    <img src="https://product.hstatic.net/1000075078/product/1645963560_ca-phe-sua-da-min_a5596fa0948640fb9196524f815a754b.png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 col-sm-12" >
                        <div>
                            <form action="{{ route('cart.store', $drink) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="drink-order">
                                    <div class="drink-name-detail"><b> {{ $drink -> drk_name }} </b></div>

                                    <div id="price" class="drink-cost"><b> {{ $drink -> drk_price }} đ </b></div>
                                    <br>
                                    <div class="pick-size"> Chọn size (bắt buộc) </div><br>
                                    <div class="pick-size-button">
                                        @foreach( $sizes as $size )
                                            <input type="radio" name="size_id" id="color{{ $size -> id }}" value="{{ $size -> size_name }}" onclick="updatePrice(this)">
                                            <label for="color{{ $size -> id }}" class="color-change-pick-size-button active"><i class='bx bx-coffee-togo'> {{ $size -> size_name }} + {{ $size -> size_price }} đ</i> </label>
                                        @endforeach
                                    </div>
                                    <br>
                                    <div class="pick-topping">Topping</div><br>
                                        <div class="pick-topping-button">
                                            @foreach( $toppings as $topping )
                                                <input type="checkbox" name="topping_id[]" id="topping{{ $topping -> id }}" data-price="{{ $topping -> topping_price }}" value="{{ $topping -> topping_name }}">
                                                <label for="topping{{ $topping -> id }}" class="color-change-pick-topping-button"> {{ $topping -> topping_name }} + {{ $topping -> topping_price }} đ</label>
                                            @endforeach
                                        </div>
                                    <br>
                                    <br>
                                    <button id="btn-order" class="save-btn"><i class='bx bx-cart-alt' style="font-size: 20px;"></i> <b> Giao Hàng Tận Nơi</b> </button>
                                </div>
                            </form>
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
                <p>{{ $drink -> drk_description }}</p>
            </div>
            <hr>
        </div>
        <div class="container">
            <br>
            <p style="font-size: 18px;"><b>Sản phẩm liên quan</b></p>
            <div class="row">
                @foreach( $drinks as $drink_id )
                    <div class="col-lg-2 col-md-8 col-sm-12" >
                        <div class="card" >
                            <img class="card-img-top" src="{{ asset(\Illuminate\Support\Facades\Storage::url('Admin/') . $drink_id -> drk_img) }}" alt="Card image">
                            <div class="card-body">
                                <a href="{{ route('drink_detail.drinkDetail' , $drink) }}" class="drink-name"><b>{{ $drink_id -> drk_name }}</b></a>
                                <p class="cost">{{ $drink_id -> drk_price }} đ</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
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
    <script src="{{ asset ('js/client/changecolor.js') }}"></script>
    <script src="{{ asset ('js/client/checkbox.js') }}"></script>
    <script src="{{ asset ('js/client/thumbnail.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
