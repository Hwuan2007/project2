<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('/resources/css/dashboard.css') }}" />
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
                                CoffeeShop <br>
                                Management
                            </h4>
                        </div>
                        <hr />
                        <div>
                            <ul class="choose">
                                <li class="active">
                                    <a href="#">
                                        <p>
                                            <i class="bx bxs-dashboard"></i>
                                            Dashboard
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <p>
                                            <i class="bx bxs-food-menu"></i>
                                            menu
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <p>
                                            <i class="bx bx-menu-alt-left"></i>
                                            danh mục
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <p>
                                            <i class="bx bxs-drink"></i> đồ uống
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <p>
                                            <i class="bx bx-user"></i> người
                                            dùng
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <p>
                                            <i class="bx bx-receipt"></i> đơn
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
                                <a class="navbar-brand" href="#"
                                    ><b>Dashboard</b></a
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
                            <div
                                class="container-fluid"
                                style="padding: 10px 20px"
                            >
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="card">
                                            <div class="content">
                                                <div class="row">
                                                    <div class="col-lg-5">
                                                        <div
                                                            class="icon-big"
                                                            style="
                                                                color: #f3bb45;
                                                            "
                                                        >
                                                            <i
                                                                class="bx bxs-food-menu"
                                                            ></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="name-card">
                                                            <p>Menu</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="footer">
                                                    <hr />
                                                    <div class="total">
                                                        ... Danh mục
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card">
                                            <div class="content">
                                                <div class="row">
                                                    <div class="col-lg-5">
                                                        <div
                                                            class="icon-big"
                                                            style="
                                                                color: #68b3c8;
                                                            "
                                                        >
                                                            <i
                                                                class="bx bxs-drink"
                                                            ></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="name-card">
                                                            <p>Đồ uống</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="footer">
                                                    <hr />
                                                    <div class="total">
                                                        ... Loại
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card">
                                            <div class="content">
                                                <div class="row">
                                                    <div class="col-lg-5">
                                                        <div
                                                            class="icon-big"
                                                            style="
                                                                color: #7ac29a;
                                                            "
                                                        >
                                                            <i
                                                                class="bx bx-user"
                                                            ></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="name-card">
                                                            <p>Người dùng</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="footer">
                                                    <hr />
                                                    <div class="total">
                                                        ... Người dùng
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card">
                                            <div class="content">
                                                <div class="row">
                                                    <div class="col-lg-5">
                                                        <div
                                                            class="icon-big"
                                                            style="
                                                                color: #eb5e28;
                                                            "
                                                        >
                                                            <i
                                                                class="bx bx-receipt"
                                                            ></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="name-card">
                                                            <p>Đơn hàng</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="footer">
                                                    <hr />
                                                    <div class="total">
                                                        ... Đơn hàng
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
