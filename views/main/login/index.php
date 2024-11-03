<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login for Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <style>
        body {
            background-color: #000;
        }

        .card {
            width: 400px;
            border: none;
        }

        .btr {
            border-top-right-radius: 5px !important;
        }

        .btl {
            border-top-left-radius: 5px !important;
        }

        .btn-dark {
            color: #fff;
            background-color: #0d6efd;
            border-color: #0d6efd;
        }

        .btn-dark:hover {
            color: #fff;
            background-color: #0d6efd;
            border-color: #0d6efd;
        }

        .nav-pills {
            display: table !important;
            width: 100%;
        }

        .nav-pills .nav-link {
            border-radius: 0px;
            border-bottom: 1px solid #0d6efd40;
        }

        .nav-item {
            display: table-cell;
            background: #0d6efd2e;
        }

        .form {
            padding: 10px;
            height: 300px;
        }

        .form input {
            margin-bottom: 12px;
            border-radius: 3px;
        }

        .form input:focus {
            box-shadow: none;
        }

        .form button {
            margin-top: 20px;
        }
    </style>
</head>

<body>
<div class="d-flex justify-content-center align-items-center mt-5">
    <div class="card">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item text-center">
                <a class="nav-link active btl" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">User</a>
            </li>
            <li class="nav-item text-center">
                <a class="nav-link btr" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Admin</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <form action="index.php?page=main&controller=login&action=index" method="POST" class="form px-4 pt-5">
                    <input type="text" name="userName" id="userName" class="form-control" placeholder="Email or Phone" required>
                    <input type="password" name="passWord" id="passWord" class="form-control" placeholder="Password" required>
                    <button class="btn btn-dark btn-block" name="login" type="submit">Login</button>
                </form>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <form action="index.php?page=main&controller=login&action=index" method="POST" class="form px-4 pt-5">
                    <input type="text" name="userName" class="form-control" placeholder="Email or Phone" required>
                    <input type="password" name="passWord" class="form-control" placeholder="Password" required>
                    <button class="btn btn-dark btn-block" name="login" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>

</html>
