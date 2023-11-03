<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset ('css/admin/order_detail.css') }}"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        />
        <link
            rel="stylesheet"
            href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
            crossorigin="anonymous"
        />
    </head>
    <body>
        <div class="">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-12">
                    <div class="sidebar">
                        <div class="logo">
                            <h4>
                                CoffeeShop <br />
                                Management
                            </h4>
                        </div>
                        <hr />
                        <div>
                            <ul class="choose">
                                <li>
                                    <a href="{{ route('dashboard.index') }}">
                                        <p>
                                            <i class="bx bxs-dashboard"></i>
                                            Dashboard
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('category.index') }}">
                                        <p>
                                            <i class="bx bx-menu-alt-left"></i>
                                            Danh mục
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('drink.index') }}">
                                        <p>
                                            <i class="bx bxs-drink"></i> Đồ uống
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('user.index') }}">
                                        <p>
                                            <i class="bx bx-user"></i> Người
                                            dùng
                                        </p>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="{{ route('order.index') }}">
                                        <p>
                                            <i class="bx bx-receipt"></i> Đơn
                                            hàng
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 col-md-4 col-sm-12">
                    <div class="main-panel">
                        <nav class="navbar navbar-expand-lg bg-body-tertiary">
                            <div
                                class="container-fluid"
                                style="
                                    background-color: white;
                                    padding: 10px 0px;
                                    border-bottom: 2px solid
                                        rgba(222, 222, 222, 0.984);
                                    padding-bottom: 15px;
                                "
                            >
                                <a class="navbar-brand" href="#">
                                    <b>Orders</b></a
                                >
                                <button
                                    class="navbar-toggler"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#navbarNav"
                                    aria-controls="navbarNav"
                                    aria-expanded="false"
                                    aria-label="Toggle navigation"
                                >
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div
                                    class="collapse navbar-collapse justify-content-end"
                                    id="navbarNav"
                                    style="margin-right: 50px"
                                >
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"
                                                ><div class="dropdown">
                                                    <button class="dropbtn"><i class="bx bxs-user-circle"></i></button>
                                                    <div class="dropdown-content">
                                                        <a href="{{route('login.logout')}}">Đăng xuất</a>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <div>
                            <div class="content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h4 class="title">
                                                        Chi Tiết Đơn hàng
                                                    </h4>
                                                </div>
                                                <br>

                                                <div class="info-customer">
                                                    <h5 class="title"><b>Thông Tin Khách Hàng</b></h5>
                                                    <br>
                                                    <div class="container">
                                                        @foreach( $users as $user )
                                                            <p><b>Tên Khách Hàng:</b> {{ $user -> username }}</p>
                                                            <p><b>Số điện thoại:</b> {{ $user -> user_phonenumber }}</p>
                                                            <p><b>Địa chỉ nhận hàng:</b>  {{ $user -> user_address }}</p>
                                                            <p><b>Ghi chú đơn hàng:</b>  {{ $receipt -> note }}</p>
                                                            <hr>
                                                            <p><b>Trạng thái:</b>
                                                                @if ($receipt->receipt_status == 'ĐANG CHỜ')
                                                                    <span class="check" style="color: #f3bb45;"><b>{{ $receipt -> receipt_status }}</b></span>
                                                                @elseif ($receipt->receipt_status == 'ĐÃ XÁC NHẬN')
                                                                    <span class="check" style="color:  #7ac29a;"><b>{{ $receipt -> receipt_status }}</b></span>
                                                                @elseif ($receipt->receipt_status == 'ĐÃ HỦY')
                                                                    <span class="check" style="color: #eb5e28;"><b>{{ $receipt -> receipt_status }}</b></span>
                                                                @endif
                                                            </p>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="content table-responsive table-full-width">
                                                        <div class="container">
                                                            <div class="card">
                                                                <div class="header">
                                                                    <h4 class="title">
                                                                        <b>Thông tin Sản Phẩm</b>
                                                                    </h4>
                                                                    <br>
                                                                </div>
                                                                <div class="content table-responsive table-full-width">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>
                                                                                    Sản
                                                                                    Phẩm
                                                                                </th>
                                                                                <th>
                                                                                    Đơn giá
                                                                                </th>
                                                                                <th>
                                                                                    Số lượng
                                                                                </th>
                                                                                <th>
                                                                                    Tổng tiền
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    @foreach( $receiptsDetails as $receiptsDetail )
{{--                                                                                        @dd($receiptsDetails)--}}
                                                                                        <div class="tch-order-card__content">
                                                                                            <div class="tch-order-card__content">
                                                                                                <h5 class="tch-order-card__title mb-0">
                                                                                                    {{ $receiptsDetail -> drk_name }}
                                                                                                </h5>
                                                                                                <div class="container">
                                                                                                    <p class="tch-order-card__description mb-0">
                                                                                                        Size: <b>{{ $receiptsDetail -> size_name }}</b>
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    @endforeach
                                                                                </td>
                                                                                <td>
                                                                                    <div class="tch-order-card__content">
                                                                                        <div class="tch-order-card__content">
                                                                                            @foreach( $receiptsDetails as $receiptsDetail )
                                                                                                <p class="tch-order-card__description mb-0" style="margin-left: 10px;">
                                                                                                    {{ number_format($receiptsDetail -> drk_price, 0, ',', '.') }} đ
                                                                                                </p>
                                                                                                <p class="tch-order-card__description mb-0">
                                                                                                     + {{ number_format($receiptsDetail -> size_price, 0, ',', '.') }} đ
                                                                                                </p>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    @foreach( $receiptsDetails as $receiptsDetail )
                                                                                        {{$receiptsDetail -> quantity}}
                                                                                        <br>
                                                                                        <br>
                                                                                    @endforeach
                                                                                </td>
                                                                                <td>
                                                                                    {{ number_format($receiptsDetail -> price, 0, ',', '.') }} đ
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="total">
                                                            <div>
                                                               <div>
                                                                    <b>Tổng tiền sản phẩm:</b> {{ number_format($receiptsDetail -> price, 0, ',', '.') }} đ
                                                                </div>
                                                                <div>
                                                                    @php $finalPrice = 0 @endphp
                                                                    @php $finalPrice = $receiptsDetail -> price + 18000 @endphp
                                                                    <b>Phí giao hàng:</b> 18.000đ
                                                                </div>
                                                                <hr>
                                                                <div>
                                                                    <b>Tổng tiền:</b> {{ number_format($finalPrice, 0, ',', '.') }} đ
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div >
                                                                <a href="{{ route('order.index') }}">
                                                                    <button class="back-btn">
                                                                        Trở lại
                                                                    </button>
                                                                </a>
                                                            </div>
                                                            <br>
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
    </body>
</html>
