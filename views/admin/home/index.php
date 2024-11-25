<?php session_start(); ?>
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
                <?php if (!isset($_SESSION['username'])): ?>
                    <div class="login me-2">
                        <a href="index.php?page=main&controller=login&action=index" class="text-dark" style="text-decoration: none;"><i class="fas fa-user"></i> Login</a>
                    </div>
                <?php else: ?>
                    <div class="logout me-2">
                        <a href='index.php?page=main&controller=login&action=logout' class="text-dark" style="text-decoration: none;"><i class="fa-solid fa-right-from-bracket"></i> Log Out</a>
                    </div>
                <?php endif; ?>
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
        <main class="container-fluid p-4 col-10">
            <h1 class="text-center">Welcome to the Admin Dashboard</h1>
            <!-- Statistics Cards -->
            <div class="row my-4">
                <div class="col-md-3">
                    <div class="card text-white bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">Total Sales</h5>
                            <p class="card-text fs-3">$12,345</p>
                            <i class="fas fa-dollar-sign fa-2x"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-success">
                        <div class="card-body">
                            <h5 class="card-title">Total Products</h5>
                            <p class="card-text fs-3">1,234</p>
                            <i class="fas fa-tshirt fa-2x"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-warning">
                        <div class="card-body">
                            <h5 class="card-title">New Orders</h5>
                            <p class="card-text fs-3">567</p>
                            <i class="fas fa-shopping-cart fa-2x"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-danger">
                        <div class="card-body">
                            <h5 class="card-title">Low Stock</h5>
                            <p class="card-text fs-3">45</p>
                            <i class="fas fa-box-open fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts -->
            <div class="row my-4">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Sales Overview</h5>
                            <canvas id="salesChart" width="500" height="300"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Top Products</h5>
                            <canvas id="topProductsChart" width="500" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Data Table -->
            <div class="row my-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Recent Orders</h5>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Customer</th>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#1001</td>
                                        <td>John Doe</td>
                                        <td>T-shirt</td>
                                        <td>2</td>
                                        <td>$50</td>
                                        <td><span class="badge bg-success">Completed</span></td>
                                    </tr>
                                    <tr>
                                        <td>#1002</td>
                                        <td>Jane Smith</td>
                                        <td>Jeans</td>
                                        <td>1</td>
                                        <td>$40</td>
                                        <td><span class="badge bg-warning">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>#1003</td>
                                        <td>Sam Wilson</td>
                                        <td>Jacket</td>
                                        <td>1</td>
                                        <td>$120</td>
                                        <td><span class="badge bg-danger">Cancelled</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <?php require_once 'views/admin/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2Ee6IS/Q9KNy0xk5LRQnv6pPbP4mxlc1ZZ8jn4rJ7DLVxFqPOsmPU9YfUCr" crossorigin="anonymous"></script>
    <!-- Include Chart.js Library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const salesData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'Sales ($)',
                data: [1200, 1900, 3000, 2500, 4000, 3200],
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        };

        const salesConfig = {
            type: 'bar',
            data: salesData,
            options: {
                responsive: true,
                plugins: {
                    legend: { position: 'top' },
                    title: { display: true, text: 'Monthly Sales Overview' }
                },
                scales: {
                    y: { beginAtZero: true }
                }
            }
        };

        const salesChart = new Chart(
            document.getElementById('salesChart'),
            salesConfig
        );


        // Data for the chart
        const productData = {
            labels: ['T-shirt', 'Jeans', 'Jacket', 'Shoes', 'Hats'], // Product names
            datasets: [{
                label: 'Units Sold',
                data: [150, 200, 120, 170, 90], // Units sold for each product
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)', // T-shirt
                    'rgba(54, 162, 235, 0.2)', // Jeans
                    'rgba(255, 206, 86, 0.2)', // Jacket
                    'rgba(75, 192, 192, 0.2)', // Shoes
                    'rgba(153, 102, 255, 0.2)'  // Hats
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }]
        };

        // Configuration for the chart
        const productConfig = {
            type: 'line', // Doughnut chart
            data: productData,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top', // Legend position
                    },
                    title: {
                        display: true,
                        text: 'Top Products Performance' // Title text
                    }
                }
            }
        };

        // Render the chart
        const topProductsChart = new Chart(
            document.getElementById('topProductsChart'),
            productConfig
        );
    </script>
</body>
</html>
