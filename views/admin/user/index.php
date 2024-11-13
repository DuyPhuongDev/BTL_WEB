<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="views/admin/home/style.css">
    <script src="https://kit.fontawesome.com/6fc5ccf10e.js" crossorigin="anonymous"></script>
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

    <div class="d-flex">
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
        <main style="height: 1600px" class="container-fluid p-4">
            <h1>Welcome to the User page</h1>
            <!-- Main content goes here -->
        </main>
    </div>

    <footer class="bg-light text-center p-3">Footer</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2Ee6IS/Q9KNy0xk5LRQnv6pPbP4mxlc1ZZ8jn4rJ7DLVxFqPOsmPU9YfUCr" crossorigin="anonymous"></script>
</body>
</html>
