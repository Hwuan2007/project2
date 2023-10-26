<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/client/cart.css') }}">
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
                    <div class="col-lg-9 col-md-8 col-sm-12" >
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
                        <div class="cart"><a href="{{ route('cart.viewCart') }}"><i class='bx bxs-cart'></i> {{ count((array) session('cart')) }}</a></div>
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
        <div class="receipt-info">
            <div class="tch-checkout-header">
                <h2  class="text-center tch-checkout-title tch-checkout-title-custom mb-0">
                    <span class="icon mr-3"><i aria-hidden="true" class="fa fa-file" style="color: #f3bb45;"></i>
                    </span>
                    <span class="text"> Xác nhận đơn hàng
                    </span>
                </h2>
            </div>
            <div class="receipt">
                <div class="row">
                    <div class="col-lg-6 col-md-4 col-sm-12" >
                        <div class="receipt-form">
                            <div class="title">
                                <a href="" class="no-reload">Giao Hàng</a>
                            </div>
                            <br>
                            <br>
                                <div>
                                    <input type="text" id="adress" name="adress" placeholder="Nhập địa chỉ" class="form-control" style="width: 450px;"/>
                                </div>
                                <br>
                                <div>
                                    <input type="text" id="name" name="name" placeholder="Nhập tên người nhận" class="form-control" style="width: 450px;"/>
                                </div>
                                <br>
                                <div>
                                    <input type="text" id="phonenumber" name="phonenumber" placeholder="Nhập số điện thoại" class="form-control" style="width: 450px;"/>
                                </div>
                                <br>
                                <div>
                                    <input type="text" id="note" name="note" placeholder="Thêm ghi chú" class="form-control" style="width: 450px;"/>
                                </div>
                                <br>
                                <div>
                                    <input type="checkbox" name="checkbox" id="checkbox">
                                    <label for="checkbox" class="checkbox"> Đồng ý với các điều khoản và điều kiện mua hàng của The Coffee House</label>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 col-sm-12" >
                        <div class="receipt-main">
                            <div class="content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="content table-responsive table-full-width">
                                                    <table class="table">
                                                        <div>
                                                            <div class="container">
                                                                <div>
                                                                    <div class="title">
                                                                        <a href="" class="no-reload">Đơn hàng đã đặt </a>
                                                                    </div>
                                                                </div>
                                                                <div class="drinkincart">
                                                                    @if( session('cart') )
                                                                        @foreach( session('cart') as $drk_id => $drink )
                                                                            <div data-toggle="modal" data-target="#cardModal" class="tch-order-card d-flex align-items-center justify-content-between">
                                                                                <div class="tch-order-card__left d-flex">
                                                                                <span class="tch-order-card__icon d-flex align-items-center">
                                                                                    <a href="" id="edit"><i aria-hidden="true" class="fa fa-pen"></i></a>
                                                                                </span>
                                                                                    <div class="tch-order-card__content">
                                                                                        <h5 class="tch-order-card__title mb-0"> {{ $drink['quantity'] }} x {{ $drink['drk_name'] }}</h5>
                                                                                        <p class="tch-order-card__description mb-0"> {{ $drink['size_id'] }}</p>
                                                                                        <p data-v-68143206="" class="tch-order-card__description mb-0">{{ $drink['topping_id'] }}</p>
                                                                                        <!---->
                                                                                        <p class="tch-order-delete-item"><a href="{{ route('cart.deleteCart', $drk_id) }}" id="delete">Xóa</a></p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="tch-order-card__right">
                                                                                    <p class="tch-order-card__price mb-0">{{ $drink['drk_price'] }} <đ></đ></p>
                                                                                </div>
                                                                            </div>
                                                                        @endforeach
                                                                    @endif

                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div>
                                                                <div class="title">
                                                                    <a href="" class="no-reload">Tổng Cộng </a>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="container">
                                                                <div class="tch-order-card tch-order-card--border d-flex align-items-center justify-content-between">
                                                                    <div div class="tch-order-card__left d-flex">
                                                                        <p  class="tch-order-card__text mb-0">Thành tiền</p>
                                                                    </div>
                                                                    <div class="tch-order-card__right mb-0">
                                                                        @php $total = 0 @endphp
                                                                        @foreach((array) session('cart') as $drink => $details)
                                                                            @php $total += $details['drk_price'] * $details['quantity'] @endphp
                                                                        @endforeach
                                                                        <p  class="tch-order-card__price mb-0">{{ $total }} đ</p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="tch-order-card tch-order-card--border d-flex align-items-center justify-content-between">
                                                                    <div div class="tch-order-card__left d-flex">
                                                                        <p  class="tch-order-card__text mb-0">Phí giao hàng</p>
                                                                    </div>
                                                                    <div class="tch-order-card__right mb-0">
                                                                        @php $discount = 18000 @endphp
                                                                        @php $finalTotal = $total @endphp
                                                                        @php $finalTotal = $total + $discount @endphp
                                                                        <p  class="tch-order-card__price mb-0">18.000 đ</p>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                    </table>
                                                </div>
                                                <div class="footer-receipt" >
                                                    <div class="container">
                                                        <div class="tch-checkout-box tch-checkout-box--list-submited d-flex justify-content-between w-100 position-static">
                                                            <div class="tch-tottal-card__content">
                                                                <p class="tch-total-card__title mb-0"> Thành tiền</p>
                                                                <p class="tch-total-card__description mb-0"><b>{{ $finalTotal }} đ</b></p>
                                                            </div>
                                                            <div class="tch-total-card__right mb-0">
                                                                <button  type="button" id="buy">
                                                                    Đặt hàng
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
