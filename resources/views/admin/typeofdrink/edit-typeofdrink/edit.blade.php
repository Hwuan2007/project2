<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset ('css/admin/edit-typeofdrink.css') }}"
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

                                <li class="active">
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
                                    ><b>Danh Mục</b></a
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
                                                        chi tiết và sửa đổi Danh mục đồ uống:
                                                    </h4>
                                                    <br />
                                                    <br />
                                                </div>
                                                <div class="info-form">
                                                    <div
                                                        class="container-fluid"
                                                    >
                                                        <div class="row">
                                                            <div
                                                                class="col-md-6"
                                                            >
                                                                <form action="{{ route('menu.update', $menu) }}" method="post">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div>
                                                                        Tên Danh
                                                                        mục:
                                                                        <input
                                                                            type="text"
                                                                            id="typeofdrink-name"
                                                                            name="type-name"
                                                                            placeholder="Nhập tên Danh mục đồ uống"
                                                                            class="form-control"
                                                                            value="{{ $menu -> type_name }}"
                                                                        />
                                                                    </div>
                                                                    <br />
                                                                    <div
                                                                        class="form-group"
                                                                    >
                                                                        <label
                                                                            >Danh
                                                                            mục
                                                                            menu</label
                                                                        >
                                                                        <select
                                                                            name="cat_id"
                                                                            class="form-control"
                                                                        >
                                                                            @foreach( $category as $categories)
                                                                                <option value="{{ $categories -> categories_id}}"
                                                                                @if( $menu -> categories_id == $categories -> categories_id)
                                                                                    {{ 'selected' }}
                                                                                    @endif
                                                                                >
                                                                                    {{ $categories -> categories_name }}
                                                                                </option>
                                                                            @endforeach

                                                                        </select>
                                                                    </div>
                                                                    <br />
                                                                    <div
                                                                        class="btn-chance"
                                                                    >
                                                                        <button
                                                                            class="save-btn"
                                                                        >
                                                                            Cập Nhật
                                                                        </button>
                                                                        <button
                                                                            class="cancel-btn"
                                                                        >
                                                                            <a href="{{ route('menu.index') }}">Hủy</a>
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div
                                                                class="col-md-6"
                                                            ></div>
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
    </body>
</html>
