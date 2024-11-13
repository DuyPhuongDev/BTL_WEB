
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <h2 class="text-center mb-4">Thêm sản phẩm</h2>
        <form action="index.php?page=admin&controller=product&action=add" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Tên sản phẩm</label>
            <input type="text" class="form-control" id="name" name="product_name" require>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Mô tả</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Giá tiền</label>
            <input type="number" class="form-control" id="price" name="price" require>
        </div>
        <div class="mb-3">
            <label for="img-url" class="form-label">Hình ảnh</label>
            <input type="text" class="form-control" id="img-url" name="image_url" require>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="number" class="form-control" id="category" name="category_id" require>
        </div>
        <input type="submit" value="Thêm" class="btn btn-primary">
        <!-- <a href="./index.php"><input type="submit" value="Thêm" class="btn btn-primary"></a> -->
        </form>
    </div>
</body>
</html>
