<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="{{ asset ('css/admin/drink.css') }}" />
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
                                <li class="active">
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
                                <li>
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
                                <a class="navbar-brand" href="#"
                                    ><b>Đồ Uống</b></a
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
                                                        Danh Sách Các Đồ Uống
                                                    </h4>
                                                    <br /><a
                                                        href="../add-drink.html"
                                                    >
                                                        <button class="add-btn">
                                                            <i
                                                                class="bx bxs-plus-circle"
                                                            ></i>
                                                            Thêm Đồ Uống
                                                        </button>
                                                    </a>

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
                                                                <th>
                                                                    Tên Đồ Uống
                                                                </th>
                                                                <th>
                                                                    Hình Ảnh
                                                                </th>
                                                                <th>Giá</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>
                                                                    Dakota Rice
                                                                </td>
                                                                <td>
                                                                    <img
                                                                        class="drink-img"
                                                                        src="https://product.hstatic.net/1000075078/product/1669736835_ca-phe-sua-da_61103101093945f39c1ce09c6efdc62f_large.png"
                                                                        alt="image"
                                                                    />
                                                                </td>
                                                                <td>500000</td>
                                                                <td>
                                                                    <button
                                                                        class="detail-btn"
                                                                    >
                                                                        xem chi
                                                                        tiết
                                                                    </button>
                                                                    <button
                                                                        class="del-btn"
                                                                    >
                                                                        xóa
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>
                                                                    Minerva
                                                                    Hooper
                                                                </td>
                                                                <td>
                                                                    <img
                                                                        class="drink-img"
                                                                        src="https://product.hstatic.net/1000075078/product/1669736835_ca-phe-sua-da_61103101093945f39c1ce09c6efdc62f_large.png"
                                                                        alt="image"
                                                                    />
                                                                </td>
                                                                <td>500000</td>
                                                                <td>
                                                                    <button
                                                                        class="detail-btn"
                                                                    >
                                                                        xem chi
                                                                        tiết
                                                                    </button>
                                                                    <button
                                                                        class="del-btn"
                                                                    >
                                                                        xóa
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>
                                                                    Sage
                                                                    Rodriguez
                                                                </td>
                                                                <td>
                                                                    <img
                                                                        class="drink-img"
                                                                        src="https://product.hstatic.net/1000075078/product/1669736835_ca-phe-sua-da_61103101093945f39c1ce09c6efdc62f_large.png"
                                                                        alt="image"
                                                                    />
                                                                </td>
                                                                <td>500000</td>
                                                                <td>
                                                                    <button
                                                                        class="detail-btn"
                                                                    >
                                                                        xem chi
                                                                        tiết
                                                                    </button>
                                                                    <button
                                                                        class="del-btn"
                                                                    >
                                                                        xóa
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>
                                                                    Philip
                                                                    Chaney
                                                                </td>
                                                                <td>
                                                                    <img
                                                                        class="drink-img"
                                                                        src="https://product.hstatic.net/1000075078/product/1669736835_ca-phe-sua-da_61103101093945f39c1ce09c6efdc62f_large.png"
                                                                        alt="image"
                                                                    />
                                                                </td>
                                                                <td>500000</td>
                                                                <td>
                                                                    <button
                                                                        class="detail-btn"
                                                                    >
                                                                        xem chi
                                                                        tiết
                                                                    </button>
                                                                    <button
                                                                        class="del-btn"
                                                                    >
                                                                        xóa
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>5</td>
                                                                <td>
                                                                    Doris Greene
                                                                </td>
                                                                <td>
                                                                    <img
                                                                        class="drink-img"
                                                                        src="https://product.hstatic.net/1000075078/product/1669736835_ca-phe-sua-da_61103101093945f39c1ce09c6efdc62f_large.png"
                                                                        alt="image"
                                                                    />
                                                                </td>
                                                                <td>500000</td>
                                                                <td>
                                                                    <button
                                                                        class="detail-btn"
                                                                    >
                                                                        xem chi
                                                                        tiết
                                                                    </button>
                                                                    <button
                                                                        class="del-btn"
                                                                    >
                                                                        xóa
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>6</td>
                                                                <td>
                                                                    Mason Porter
                                                                </td>
                                                                <td>
                                                                    <img
                                                                        class="drink-img"
                                                                        src="https://product.hstatic.net/1000075078/product/1669736835_ca-phe-sua-da_61103101093945f39c1ce09c6efdc62f_large.png"
                                                                        alt="image"
                                                                    />
                                                                </td>
                                                                <td>500000</td>
                                                                <td>
                                                                    <button
                                                                        class="detail-btn"
                                                                    >
                                                                        xem chi
                                                                        tiết
                                                                    </button>
                                                                    <button
                                                                        class="del-btn"
                                                                    >
                                                                        xóa
                                                                    </button>
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
