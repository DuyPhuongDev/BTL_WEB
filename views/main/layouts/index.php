<?php
include_once('header.php');
include("function.php");
?>
<style>
.product-large {
    height: 550px;
    margin-left: -15px;
    margin-right: -15px;
    text-align: center;
    padding-top: 285px;
}
.set-bg {
    background-repeat: no-repeat;
    background-size: cover;
    background-position: top center;

}
.product-item {
            border: 1px solid #ddd; /* Thêm đường viền cho sản phẩm */
            padding: 10px; /* Khoảng cách bên trong */
            border-radius: 5px; /* Bo góc cho sản phẩm */
            text-align: center; /* Căn giữa nội dung */
            background-color: #fff; /* Màu nền trắng */
        }
.pi-pic img {
            width: 100%; /* Đảm bảo ảnh sản phẩm chiếm toàn bộ chiều rộng */
            height: auto; /* Giữ tỷ lệ khung hình cho ảnh */
        }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        items: 3, // Số lượng sản phẩm hiển thị
        loop: true, // Lặp lại carousel
        margin: 25, // Khoảng cách giữa các sản phẩm
        autoplay: true, // Tự động chạy carousel
        autoplayTimeout: 3000, // Thời gian tự động chạy giữa các sản phẩm
        autoplayHoverPause: true // Dừng khi hover
    });
});
</script>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active align-center">
            <img src="https://i.pinimg.com/564x/72/03/7d/72037db20c65de89dbd9ce3746916cf0.jpg" class="d-block w-100 imageChance" alt="banner1">
            </div>
            <div class="carousel-item">
            <img src="https://i.pinimg.com/564x/54/a5/b2/54a5b213c3887a3459fe22b83a474e8c.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
            <img src="https://i.pinimg.com/564x/09/bc/a9/09bca94d568f6985f23c1586eb3c33b4.jpg" class="d-block w-100" alt="">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
</div>

<!-- Top Product Banner Section Begin -->
<section class="topProduct-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="filter-control">
                    <h3> Products </h3>
                </div>
                <div class="product-slider owl-carousel">
                    <?php
                    getMProduct();
                    ?>
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="product-large set-bg m-large" data-setbg="views\main\layouts\img\someproduct.png">
                    <h2>Some Product</h2>
                    <a href="shop.php?cat_id=1">Discover More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer -->
<?php
include_once('footer.php');
?>