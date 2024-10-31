<?php
// $active = "Home";
include("header.php");
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
</style>
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
            <div class="col-lg-3 offset-lg-1">
                <div class="product-large set-bg m-large" data-setbg="img/someproduct.jpg">
                    <h2>Some Product</h2>
                    <a href="shop.php?cat_id=1">Discover More</a>
                </div>
            </div>
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

        </div>
    </div>
</section>
<!-- Footer -->
<?php
include('footer.php');
?>


</body>

</html>