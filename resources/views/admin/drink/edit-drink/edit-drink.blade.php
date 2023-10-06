<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="../../../../../public/css/Admin/edit-drink.css" />
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
                                    <a href="{{ route('dashboard.index') }}">
                                        <p>
                                            <i class="bx bxs-dashboard"></i>
                                            Dashboard
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('typeofdrink.index') }}">
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
                                                        Chi tiết và sửa đổi Đồ Uống:
                                                    </h4>
                                                    <br />
                                                    <br />
                                                </div>
                                                <div class="info-form">
                                                    <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <form action="">
                                                                <div>
                                                                     Tên Đồ Uống:
                                                                    <input type="text" id="drink-name" name="drink-name" placeholder="Nhập tên đồ uống"
                                                                    class="form-control">
                                                                </div>
                                                                <br>
                                                                <div class="form-group d-flex flex-column">
                                                                    <label>Ảnh Đồ Uống:</label>
                                                                    <input accept="image/*" type='file' id="imgInp" name="drink-img[]" multiple />
                                                                <div id="img-upload-container" class="mt-3"></div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Giá:</label>
                                                            <input value="" required name="drink-price" type="number" min="0" placeholder="Nhập giá tiền"
                                                                class="form-control">
                                                        </div>
                                                        <br>
                                                        <div class="form-group">
                                                            <label>Danh mục</label>
                                                            <select name="typeifdrink_id" class="form-control">
                                                                <optgroup label="Cà Phê">
                                                                    <option value="option1-1">Cà Phê Việt Nam</option>
                                                                    <option value="option1-2">Cà Phê máy</option>
                                                                    <option value="option1-2">Cold Brew</option>
                                                                </optgroup>
                                                                <optgroup label="Trà">
                                                                    <option value="option2-1">Trà trái Cây</option>
                                                                    <option value="option2-2">Trà sữa Macchiato</option>
                                                                <optgroup label="Cloud">
                                                                    <option value="option3-1">CloudTea</option>
                                                                    <option value="option3-2">CloudeFee</option>
                                                                <optgroup label="Thức uống đá say">
                                                                    <option value="option4-1">Đá say Frosty</option>
                                                                <optgroup label="Bánh & Snack">
                                                                    <option value="option5-1">Bánh mặn</option>
                                                                    <option value="option5-2">Bánh ngọt</option>
                                                                    <option value="option5-2">Snack</option>
                                                            </select>
                                                        </div>
                                                        <br>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" name="drink_featured"
                                                                id="drink_featured">
                                                            <label class="form-check-label" for="drink_featured">Sản phẩm nổi bật</label>
                                                        </div>
                                                        <br>
                                                        <div class="form-group">
                                                            <label>Mô tả:</label>
                                                            <textarea required name="drink_details" class="form-control" rows="3"></textarea>
                                                        </div>
                                                        <br>
                                                        <div class="btn-chance">
                                                            <button class="save-btn">cập nhật</button>
                                                            <button class="cancel-btn">Hủy</button>
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
        <script src="../../../../public/js/admin/uploadimage.js"></script>
    </body>
</html>
