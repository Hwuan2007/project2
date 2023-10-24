<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" type="text/css" href="{{ asset ('css/client/home.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
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
                            <a href="#">Cà Phê</a>
                            <a href="#">Trà</a>
                            <a href="{{ route('all.index') }}">Menu</a>
                            <a href="#">Chuyện nhà</a>
                            <a href="#">Cửa hàng</a>
                            <a href="#">Tuyển dụng</a>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-4 col-sm-12" >
                        <div class="cart"><a href=""><i class='bx bxs-cart'></i></a></div>
                    </div>
                    <div class="col-lg-1 col-md-4 col-sm-12" >
                        <div class="dropdown">
                            <button class="dropbtn"><i class='bx bxs-user-circle'></i></button>
                                <div class="dropdown-content">
                                    <a href="">Đăng xuất</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="carousel">
        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="https://file.hstatic.net/1000075078/file/nhomvui_web_moi_desktop_dda86a0464364f93acf2bd4b2366e334.jpg" alt="slide-1" class="d-block w-100">
                </div>
                <div class="carousel-item">
                  <img src="https://file.hstatic.net/1000075078/file/web_desktop_602aece503e446f5b1d7bc9adbf2e3a4.jpg" alt="slide-2" class="d-block w-100">
                </div>
                <div class="carousel-item">
                  <img src="https://file.hstatic.net/1000075078/file/chung_minh__web_moi__desktop_6fc4eeb6c24b419381de20b159b18723.jpg" alt="slide-3 " class="d-block w-100">
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

    <div class="bestseller">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-4 col-sm-12" >
                    <div class="banner">
                        <img src="https://file.hstatic.net/1000075078/file/banner_app_2_c3dea7cad7cb4fad94f162ea6ccd388b.jpg" alt="bannner " class="d-block w-100">
                    </div>
                </div>
                @foreach($drinks as $drink)
                <div class="col-lg-3 col-md-8 col-sm-12" >
                    <div class="card" >
                        <a href="{{ route('drink_detail.drinkDetail', $drink) }}">
                            <img class="card-img-top" src="{{ asset(\Illuminate\Support\Facades\Storage::url('Admin/') . $drink -> drk_img) }}" alt="Card image">
                        </a>    
                        <div class="card-body">
                            <a href="#" class="drink-name"><b>{{ $drink -> drk_name }}</b></a>
                            <p class="cost">{{ $drink -> drk_price }} đ</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="review">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <div  class="bgreview">
                        <img src="https://file.hstatic.net/1000075078/file/_downloader.la_-61dfcefcc6aae_629a3f726345420b847a5d55151e8513_grande.jpg" alt="">
                        <div class="test"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <div class="col-lg-12 col-md-8 col-sm-12">
                        <p><img class="reviewimg" src="https://file.hstatic.net/1000075078/file/tagline__1__1_378410beecb347f38cf8425ef7459690.png" alt="review"></p>
                    </div>
                    </p>
                    <div class="col-lg-12 col-md-8 col-sm-12">
                        <P>Được trồng trọt và chăm chút kỹ lưỡng, nuôi dưỡng từ thổ nhưỡng phì nhiêu,
                        nguồn nước mát lành, bao bọc bởi mây và sương cùng nền nhiệt độ mát mẻ quanh năm,
                        những búp trà ở Tây Bắc mập mạp và xanh mướt, hội tụ đầy đủ dưỡng chất, sinh khí,
                        và tinh hoa đất trời.Chính khí hậu đặc trưng cùng phương pháp canh tác của đồng bào
                        dân tộc nơi đây đã tạo ra Trà Xanh vị mộc dễ uống, dễ yêu, không thể trộn lẫn với
                        ất kỳ vùng miền nào khác.</P>
                        <button type="button" class="btnreview">thử ngay</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="news">
        <div class="container">
            <div class="news-content">
                <h2 class="blog_home_title">
                    <img src="https://file.hstatic.net/1000075078/file/coffee-2_2_92db24958ff14ac4b4249b3256f7a415.png">
                     Chuyện Nhà
                </h2>
                <br>
                <h3 class="blog_home_blogtitle">
                    <a href="">
                        Blog
                    </a>
                </h3>
                <div class="news-card">
                    <div class="row">
                        <div class="col-lg-4 col-md-8 col-sm-12" >
                            <div class="card" >
                                <img class="card-img-top" src="https://file.hstatic.net/1000075078/article/cautoankeothom_thecoffeehouse_03_29cd435c9a574e1a867ac36f2c863bb6_grande.jpg" alt="Card image">
                                <div class="card-body">
                                    <p class="date" style="color: #19191995;">16/08/2023</p>
                                    <a href="#" class="blog-title"><b>NGƯỢC LÊN TÂY BẮC GÓI VỊ MỘC VỀ XUÔI</b></a>
                                    <p class="blog-review" style="font-size: 15px;">Những dải ruộng bậc thang, các cô gái Thái với điệu múa xòe hoa,
                                        muôn cung đường ngợp mùa hoa… đó là rẻo cao Tây Bắc luôn làm say lòng...</p>
                                </div>
                              </div>
                        </div>
                        <div class="col-lg-4 col-md-8 col-sm-12" >
                            <div class="card" >
                                <img class="card-img-top" src="https://file.hstatic.net/1000075078/article/cautoankeothom_thecoffeehouse_03_29cd435c9a574e1a867ac36f2c863bb6_grande.jpg" alt="Card image">
                                <div class="card-body">
                                    <p class="date"style="color: #19191995;">16/08/2023</p>
                                    <a href="#" class="blog-title"><b>NGƯỢC LÊN TÂY BẮC GÓI VỊ MỘC VỀ XUÔI</b></a>
                                    <p class="blog-review" style="font-size: 15px;">Những dải ruộng bậc thang, các cô gái Thái với điệu múa xòe hoa,
                                        muôn cung đường ngợp mùa hoa… đó là rẻo cao Tây Bắc luôn làm say lòng...</p>
                                </div>
                              </div>
                        </div>
                        <div class="col-lg-4 col-md-8 col-sm-12" >
                            <div class="card" >
                                <img class="card-img-top" src="https://file.hstatic.net/1000075078/article/cautoankeothom_thecoffeehouse_03_29cd435c9a574e1a867ac36f2c863bb6_grande.jpg" alt="Card image">
                                <div class="card-body">
                                    <p class="date" style="color: #19191995;">16/08/2023</p>
                                    <a href="#" class="blog-title"><b>NGƯỢC LÊN TÂY BẮC GÓI VỊ MỘC VỀ XUÔI</b></a>
                                    <p class="blog-review" style="font-size: 15px;">Những dải ruộng bậc thang, các cô gái Thái với điệu múa xòe hoa,
                                        muôn cung đường ngợp mùa hoa… đó là rẻo cao Tây Bắc luôn làm say lòng...</p>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
                <h3 class="blog_home_blogtitle">
                    <a href="">
                        Blog
                    </a>
                </h3>
                <div class="news-card">
                    <div class="row">
                        <div class="col-lg-4 col-md-8 col-sm-12" >
                            <div class="card" >
                                <img class="card-img-top" src="https://file.hstatic.net/1000075078/article/cautoankeothom_thecoffeehouse_03_29cd435c9a574e1a867ac36f2c863bb6_grande.jpg" alt="Card image">
                                <div class="card-body">
                                    <p class="date" style="color: #19191995;">16/08/2023</p>
                                    <a href="#" class="blog-title"><b>NGƯỢC LÊN TÂY BẮC GÓI VỊ MỘC VỀ XUÔI</b></a>
                                    <p class="blog-review" style="font-size: 15px;">Những dải ruộng bậc thang, các cô gái Thái với điệu múa xòe hoa,
                                        muôn cung đường ngợp mùa hoa… đó là rẻo cao Tây Bắc luôn làm say lòng...</p>
                                </div>
                              </div>
                        </div>
                        <div class="col-lg-4 col-md-8 col-sm-12" >
                            <div class="card" >
                                <img class="card-img-top" src="https://file.hstatic.net/1000075078/article/cautoankeothom_thecoffeehouse_03_29cd435c9a574e1a867ac36f2c863bb6_grande.jpg" alt="Card image">
                                <div class="card-body">
                                    <p class="date"style="color: #19191995;">16/08/2023</p>
                                    <a href="#" class="blog-title"><b>NGƯỢC LÊN TÂY BẮC GÓI VỊ MỘC VỀ XUÔI</b></a>
                                    <p class="blog-review" style="font-size: 15px;">Những dải ruộng bậc thang, các cô gái Thái với điệu múa xòe hoa,
                                        muôn cung đường ngợp mùa hoa… đó là rẻo cao Tây Bắc luôn làm say lòng...</p>
                                </div>
                              </div>
                        </div>
                        <div class="col-lg-4 col-md-8 col-sm-12" >
                            <div class="card" >
                                <img class="card-img-top" src="https://file.hstatic.net/1000075078/article/cautoankeothom_thecoffeehouse_03_29cd435c9a574e1a867ac36f2c863bb6_grande.jpg" alt="Card image">
                                <div class="card-body">
                                    <p class="date" style="color: #19191995;">16/08/2023</p>
                                    <a href="#" class="blog-title"><b>NGƯỢC LÊN TÂY BẮC GÓI VỊ MỘC VỀ XUÔI</b></a>
                                    <p class="blog-review" style="font-size: 15px;">Những dải ruộng bậc thang, các cô gái Thái với điệu múa xòe hoa,
                                        muôn cung đường ngợp mùa hoa… đó là rẻo cao Tây Bắc luôn làm say lòng...</p>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>

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




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>
