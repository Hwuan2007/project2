<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="{{ asset ('css/admin/order.css') }}" />
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

                                    <a href="{{ route('menu.index') }}">
                                        <p>
                                            <i class="bx bxs-food-menu"></i>
                                            Menu
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
                                                ><i
                                                    class="bx bxs-user-circle"
                                                ></i
                                            ></a>
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
                                                        Danh Sách Đơn hàng
                                                    </h4>
                                                    <br />
                                                    <br />
                                                </div>
                                                <div
                                                    class="content table-responsive table-full-width"
                                                >
                                                    <table
                                                        class="table table-striped"
                                                    >
                                                    <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Sản Phẩm</th>
                                                                <th>Tổng Tiền</th>
                                                                <th>Action</th>
                                                                <th>tình trạng</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    1
                                                                </td>
                                                                <td>
                                                                <div class="tch-order-card__content">
                                                                    <div class="tch-order-card__content">
                                                                        <h5 class="tch-order-card__title mb-0"> 1 x Trà Sữa Oolong BLao </h5>
                                                                        <p class="tch-order-card__description mb-0"> (Lớn; Kem Phô Mai Macchiato + Trân châu trắng)</p>
                                                                    </div>
                                                                    <div class="tch-order-card__content">
                                                                        <h5 class="tch-order-card__title mb-0"> 2 x Cà Phê sữa đá </h5>
                                                                        <p class="tch-order-card__description mb-0"> (Lớn; Kem Phô Mai Macchiato)</p>
                                                                    </div>
                                                                </div>
                                                                </td>
                                                                <td>
                                                                    147.000đ
                                                                </td>
                                                                <td>
                                                                    <button class="accept-btn">
                                                                        <a href=""> duyệt đơn </a>
                                                                    </button>
                                                                    <button class="del-btn">
                                                                        <a href=""> hủy</a>
                                                                    </button>
                                                                </td>
                                                                <td>
                                                                    <div class="check" style="color: #7ac29a;"><b>ĐÃ XÁC NHẬN</b></div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    1
                                                                </td>
                                                                <td>
                                                                <div class="tch-order-card__content">
                                                                    <div class="tch-order-card__content">
                                                                        <h5 class="tch-order-card__title mb-0"> 1 x Trà Sữa Oolong BLao </h5>
                                                                        <p class="tch-order-card__description mb-0"> (Lớn; Kem Phô Mai Macchiato + Trân châu trắng)</p>
                                                                    </div>
                                                                    <div class="tch-order-card__content">
                                                                        <h5 class="tch-order-card__title mb-0"> 3 x Cà Phê sữa đá </h5>
                                                                        <p class="tch-order-card__description mb-0"> (Lớn; Kem Phô Mai Macchiato)</p>
                                                                    </div>
                                                                </div>
                                                                </td>
                                                                <td>
                                                                    147.000đ
                                                                </td>
                                                                <td>
                                                                    <button class="accept-btn">
                                                                        <a href=""> duyệt đơn </a>
                                                                    </button>
                                                                    <button class="del-btn">
                                                                        <a href=""> hủy</a>
                                                                    </button>
                                                                </td>
                                                                <td>
                                                                    <div class="check" style="color: #f3bb45;"><b>CHỜ XÁC NHẬN</b></div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    1
                                                                </td>
                                                                <td>
                                                                <div class="tch-order-card__content">
                                                                    <div class="tch-order-card__content">
                                                                        <h5 class="tch-order-card__title mb-0"> 1 x Trà Sữa Oolong BLao </h5>
                                                                        <p class="tch-order-card__description mb-0"> (Lớn; Kem Phô Mai Macchiato + Trân châu trắng)</p>
                                                                    </div>
                                                                    <div class="tch-order-card__content">
                                                                        <h5 class="tch-order-card__title mb-0"> 2 x Cà Phê sữa đá </h5>
                                                                        <p class="tch-order-card__description mb-0"> (Lớn; Kem Phô Mai Macchiato)</p>
                                                                    </div>
                                                                </div>
                                                                </td>
                                                                <td>
                                                                    147.000đ
                                                                </td>
                                                                <td>
                                                                    <button class="accept-btn ">
                                                                        <a href=""> duyệt đơn </a>
                                                                    </button>
                                                                    <button class="del-btn">
                                                                        <a href=""> hủy</a>
                                                                    </button>
                                                                </td>
                                                                <td>
                                                                   <div class="check" style="color: #eb5e28;"><b>ĐÃ HỦY</b></div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
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
