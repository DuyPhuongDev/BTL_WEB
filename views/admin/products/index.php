<?php
    $products = $data['products'];
    $categories = $data['categories'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="views/admin/home/style.css">
    <script src="https://kit.fontawesome.com/6fc5ccf10e.js" crossorigin="anonymous"></script>
    <style>
        .cell {
            max-width: 150px;         /* Đặt chiều rộng tối đa cho ô */
            white-space: nowrap;      /* Không xuống dòng */
            overflow: hidden;         /* Ẩn phần nội dung thừa */
            text-overflow: ellipsis;  /* Thêm dấu ... nếu nội dung quá dài */
        }
    </style>
</head>
<body>
    <header class="header-section">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand mx-auto" href="#">Admin Page</a>
                <button class="btn btn-logout">
                    <span><i class="fa-solid fa-user"></i> Logout</span>
                </button>
            </div>
        </nav>
    </header>

    <div class="container-fluid row">
        <!-- Sidebar -->
        <aside id="sidebar" class="sidebar collapse d-lg-block bg-light col-2">
            <div class="sidebar-header text-center mt-5">
                <span><i class="fa-solid fa-circle-user fa-2xl"></i></span>
                <h3>Admin</h3>
            </div>
            <div class="list-group list-group-flush">
                <a href="index.php?page=admin&controller=dashboard&action=index" class="list-group-item list-group-item-action"><i class="fa-solid fa-house"></i> Dashboard</a>
                <a href="index.php?page=admin&controller=user&action=index" class="list-group-item list-group-item-action"><i class="fa-solid fa-users"></i> Quản lý tài khoản</a>
                <a href="index.php?page=admin&controller=product&action=index" class="list-group-item list-group-item-action"><i class="fa-solid fa-cart-shopping"></i> Quản lý sản phẩm</a>
                <a href="index.php?page=admin&controller=news&action=index" class="list-group-item list-group-item-action"><i class="fa-solid fa-newspaper"></i> Quản lý bài viết</a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="content-wrapper col-10">
            <section class="content-header">
                <div class="container-fluid">
                    <div style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Quản lý sản phẩm</li>
                        </ol>
                    </div>
                    <div class="container-fluid row">
                        <div class="my-2">
                            <p class="row">
                            <h1 class="text-center">Quản lý Sản phẩm</h1>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <hr>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="shadow p-2 rounded">
                            <div class="dialog">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProduct">Thêm sản phẩm</button>

                                <!-- Modal -->
                                <div class="modal fade" id="addProduct" tabindex="-1" aria-labelledby="addProductLabel" aria-hidden="true">
                                    <form id="addProductForm" class="needs-validation" action="index.php?page=admin&controller=product&action=add" method="POST" enctype="multipart/form-data" novalidate>
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="addProductLabel">Thêm sản phẩm mới</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="productName" class="form-label">Tên sản phẩm</label>
                                                        <input type="text" class="form-control" id="productName" name="product_name" required>
                                                        <div class="invalid-feedback">
                                                            Vui lòng nhập tên sản phẩm!
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="description" class="form-label">Mô tả</label>
                                                        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                                                        <div class="invalid-feedback">
                                                            Vui lòng nhập mô tả sản phẩm!
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="imageUrl" class="form-label">URL ảnh</label>
                                                        <input type="file" class="form-control" id="imageUrl" name="image_url" required>
                                                        <div class="invalid-feedback">
                                                            Vui lòng thêm hình ảnh cho sản phẩm!
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="price" class="form-label">Giá</label>
                                                        <input type="number" class="form-control" id="price" name="price" required min="0" step="0.01">
                                                        <div class="invalid-feedback">
                                                            Vui lòng nhập giá sản phẩm!
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="categoryId" class="form-label">Danh mục</label>
                                                        <select class="form-select" id="categoryId" name="category_id" required>
                                                            <option value="">Chọn danh mục</option>
                                                            <?php foreach ($categories as $category) : ?>
                                                                <option value="<?php echo $category->getCategoryId(); ?>"><?php echo $category->getCategoryName(); ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Vui lòng chọn danh mục!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                    <button type="submit" class="btn btn-primary">Lưu sản phẩm</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <footer class="bg-light text-center p-3">Footer</footer>


    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            console.log(forms);

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    console.log('submit');
                    if (!form.checkValidity()) {
                        console.log('invalid');
                    event.preventDefault()
                    event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })();

        // Đảm bảo rằng script này được chạy sau khi modal được đóng
        var modal = document.getElementById('addProduct');
        modal.addEventListener('hidden.bs.modal', function (event) {
            // Reset form khi modal đóng
            var form = document.getElementById('addProductForm');
            form.reset();  // Reset các trường nhập liệu
            form.classList.remove('was-validated');  // Loại bỏ lớp đã xác thực nếu có
        });

    </script>


</body>
</html>
