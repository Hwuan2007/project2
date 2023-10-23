<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="{{ asset ('css/admin/edit-drink.css') }}" />
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
                                    ><b>Menu</b></a
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
                                                        <a href="">Đăng xuất</a>
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
                                                        Chi tiết và cập nhật Đồ Uống
                                                    </h4>
                                                    <br />
                                                    <br />
                                                </div>
                                                <div class="info-form">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <form action="{{ route('drink.update', $drink) }}" method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="col-md-6">
                                                                    <div>
                                                                        Tên Đồ Uống:
                                                                        <input type="text" id="drink-name" name="drk_name" placeholder="Nhập tên đồ uống"
                                                                               class="form-control" value="{{ $drink -> drk_name }}" required>
                                                                    </div>
                                                                    <br>
                                                                    <div class="form-group d-flex flex-column">
                                                                        <label>Ảnh Đồ Uống:</label>
                                                                        <input accept="image/*" type='file' id="imgInp" name="drk_img" multiple required/>
                                                                        <br>
                                                                        <img
                                                                            class=drk_img"
                                                                            src="{{ asset(\Illuminate\Support\Facades\Storage::url('Admin/') . $drink -> drk_img) }}"
                                                                            alt="image"
                                                                        />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Giá:</label>
                                                                        <input value="{{ $drink -> drk_price }}" required name="drk_price" type="text" placeholder="Nhập giá tiền"
                                                                               class="form-control">
                                                                    </div>
                                                                    <br>
                                                                    <div class="form-group">
                                                                        <label>Danh mục</label>
                                                                        <select name="type_id" class="form-control">
                                                                            @foreach( $menus as $menu )
                                                                                <optgroup label="{{ $menu -> category -> categories_name }}">
                                                                                    <option value="{{ $menu -> id}}"
                                                                                        @if( $drink -> type_id == $menu -> id)
                                                                                            {{ 'selected' }}
                                                                                        @endif
                                                                                    >
                                                                                        {{ $menu -> type_name }}
                                                                                    </option>
                                                                                </optgroup>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <br>
                                                                    <div class="form-group">
                                                                        <label>Mô tả:</label>
                                                                        <textarea required name="drk_description" class="form-control" rows="3">{{ $drink -> drk_description }}</textarea>
                                                                    </div>
                                                                    <br>
                                                                    <div class="btn-chance">
                                                                        <button class="save-btn"><a href="">Lưu</a></button>
                                                                        <button class="cancel-btn"><a href="">Hủy</a></button>
                                                                    </div>
                                                                </div>
                                                            </form>
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
        <script src="{{ asset ('js/admin/uploadimage.js') }}"></script>
    </body>
</html>
