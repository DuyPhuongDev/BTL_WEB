<?php
require_once('models/Category.php');
require_once('./connection.php');
include_once('views/main/navbar.php');
?>
<main>
   <div class="container">
      <!-- Breadcrumb Section Begin -->
      <div class="breacrumb-section">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="breadcrumb-text">
                     <a href="index.php"><i class="fa fa-home"></i> Home</a>
                     <a href="shop.php">Shop</a>

                     <?php

                     if (isset($link)) {
                        echo "<span> {$link[0]->category_name} </span>";
                     }
                     ?>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <section class="product-shop spad">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-12 col-sm-8 order-1 order-lg-1 produts-sidebar-filter">
                  <div class="filter-widget">
                     <h4 class="fw-title">Categories</h4>
                     <ul class="filter-catagories ">
                        <a href="index.php?page=main&controller=products&action=index">
                           <li class="hovclass"> Tất cả </li>
                        </a>
                        <?php
                        if (!empty($p_cat)) {
                           foreach ($p_cat as $p_cat_items) {
                              echo '<a href="index.php?page=main&controller=products&action=index&cat_id=' . $p_cat_items->category_id . '">
               <li class="hovclass">' . $p_cat_items->category_name . '</li>
            </a>';
                           }
                        } else {
                           echo '<a href="index.php?page=main&controller=products&action=index&cat_id=' . $p_cat_items->category_id . '">
            <li class="hovclass">' . $p_cat_items->category_name . '</li>
         </a>';
                        }
                        ?>

                     </ul>
                  </div>
               </div>


               <div class="col-lg-9 col-md-12 order-2 order-lg-2">
                  <div class="product-list">
                     <div class="row">
                        <?php
                        if (isset($_GET['viewdetail'])) {
                           foreach ($products as $product) {
                              ?>
                              <div class='col-lg-6' style='margin:0 auto'>
                                 <div class='product-pic-zoom  col-md-6 col-sm-12'
                                    style='min-width: 300px; margin: 0 0 30px 0'>
                                    <img class='product-big-img' style="width:100%; height:auto;"
                                       src='<?php echo $product->image_url; ?>' alt='<?php echo $product_title; ?>'>

                                 </div>
                                 <div class='product-thumbs'>
                                    <div class='aaaaaaa'>
                                       <div class='small_img' data-imgbigurl='img/products/$product_img1'><img
                                             style="width:100px; height:auto;" src='<?php echo $product->image_url; ?>'
                                             alt='$product_title'></div>
                                       <div class='small_img' data-imgbigurl='img/products/$product_img2'><img
                                             style="width:100px; height:auto;" src='<?php echo $product->image_url; ?>'
                                             alt='$product_title'></div>
                                       <div class='small_img' data-imgbigurl='img/products/$product_img2'><img
                                             style="width:100px; height:auto;" src='<?php echo $product->image_url; ?>'
                                             alt='$product_title'></div>
                                    </div>
                                 </div>
                              </div>
                              <div class='col-lg-6 '>
                                 <div class='product-details'>
                                    <div class='pd-title'>

                                       <h3>
                                          <?php
                                          echo htmlspecialchars($product->product_name);
                                          ?>
                                       </h3>
                                    </div>

                                    <div class="rating">
                                       <input type="radio" id="star5" name="rating" value="5" checked>
                                       <label for="star5" title="5 stars">★</label>
                                       <input type="radio" id="star4" name="rating" value="4">
                                       <label for="star4" title="4 stars">★</label>
                                       <input type="radio" id="star3" name="rating" value="3">
                                       <label for="star3" title="3 stars">★</label>
                                       <input type="radio" id="star2" name="rating" value="2">
                                       <label for="star2" title="2 stars">★</label>
                                       <input type="radio" id="star1" name="rating" value="1">
                                       <label for="star1" title="1 star">★</label>
                                    </div>

                                    <hr class="custom-divider">

                                    <p class="product-price">Giá: <span class="price"><?php
                                    echo htmlspecialchars($product->price);
                                    ?> VND</span></p>
                                    <ul class='pd-tags'>
                                       <li><span>CATEGORY</span>:
                                          <?php
                                          if (isset($link)) {
                                             echo "<span> {$link[0]->category_name} </span>";
                                          }
                                          ?>

                                       </li>
                                    </ul>
                                    <button>
                                       <div class="default-btn">
                                          <svg viewBox="0 0 24 24" width="20" height="20" stroke="#ffffff" stroke-width="2"
                                             fill="none" stroke-linecap="round" stroke-linejoin="round" class="cart-icon">
                                             <circle cx="9" cy="21" r="1"></circle>
                                             <circle cx="20" cy="21" r="1"></circle>
                                             <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                          </svg>
                                          <span>Add to Cart</span>
                                       </div>
                                       <div class="hover-btn">
                                          <svg viewBox="0 0 320 512" width="12.5" height="20"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M160 0c17.7 0 32 14.3 32 32V67.7c1.6 .2 3.1 .4 4.7 .7c.4 .1 .7 .1 1.1 .2l48 8.8c17.4 3.2 28.9 19.9 25.7 37.2s-19.9 28.9-37.2 25.7l-47.5-8.7c-31.3-4.6-58.9-1.5-78.3 6.2s-27.2 18.3-29 28.1c-2 10.7-.5 16.7 1.2 20.4c1.8 3.9 5.5 8.3 12.8 13.2c16.3 10.7 41.3 17.7 73.7 26.3l2.9 .8c28.6 7.6 63.6 16.8 89.6 33.8c14.2 9.3 27.6 21.9 35.9 39.5c8.5 17.9 10.3 37.9 6.4 59.2c-6.9 38-33.1 63.4-65.6 76.7c-13.7 5.6-28.6 9.2-44.4 11V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V445.1c-.4-.1-.9-.1-1.3-.2l-.2 0 0 0c-24.4-3.8-64.5-14.3-91.5-26.3c-16.1-7.2-23.4-26.1-16.2-42.2s26.1-23.4 42.2-16.2c20.9 9.3 55.3 18.5 75.2 21.6c31.9 4.7 58.2 2 76-5.3c16.9-6.9 24.6-16.9 26.8-28.9c1.9-10.6 .4-16.7-1.3-20.4c-1.9-4-5.6-8.4-13-13.3c-16.4-10.7-41.5-17.7-74-26.3l-2.8-.7 0 0C119.4 279.3 84.4 270 58.4 253c-14.2-9.3-27.5-22-35.8-39.6c-8.4-17.9-10.1-37.9-6.1-59.2C23.7 116 52.3 91.2 84.8 78.3c13.3-5.3 27.9-8.9 43.2-11V32c0-17.7 14.3-32 32-32z"
                                                fill="#ffffff"></path>
                                          </svg>
                                          <span>
                                             <?php
                                             echo htmlspecialchars($product->price);
                                             ?>
                                          </span>
                                       </div>
                                    </button>
                                 </div>
                              </div>
                              <?php
                           }
                           ?>
                           <?php
                        } else
                           foreach ($products as $product) {
                              ?>
                              <div class='col-lg-4 col-sm-6'>
                                 <div class='product-item'>
                                    <div class='pi-pic' style='max-height:350px'>
                                       <img src='<?php echo $product->image_url ?>' alt='$product_title'
                                          style="width: 100px; object-fit: cover; object-position: center;">

                                       <ul>
                                          <li class='quick-view'>
                                             <a href="index.php?page=main&controller=products&action=index&viewdetail=<?php echo $product->product_id; ?> &cat_id=<?php echo $product->category_id; ?>"
                                                style="background:#fe4231; color:white;">View Details</a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class='pi-text'>
                                       <div class='catagory-name'></div>
                                       <a href='product.php?product_id=$products_id'>
                                          <h5><?php echo htmlspecialchars($product->product_name); ?></h5>
                                       </a>
                                       <div class='product-price'>
                                          <?php echo htmlspecialchars($product->price); ?>
                                          Vnđ
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <?php
                           }
                        ?>
                     </div>
                  </div>
               </div>
            </div>
      </section>
      <?php
      if (isset($_GET['viewdetail'])) {
         ?>
         <div class="related-products spad">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="section-title">
                        <h2 class="likethis">More like this</h2>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <?php
                  foreach ($likeproducts as $product) {
                     ?>
                     <div class='col-lg-3 col-sm-6'>
                        <div class='product-item'>
                           <div class='pi-pic' style='max-height:300px'>
                              <img src='<?php echo $product->image_url; ?>' alt='$p_name'
                                 style="width: 100px; object-fit: cover; object-position: center;">
                              <ul>
                                 <li class='quick-view'><a
                                       href="index.php?page=main&controller=products&action=index&viewdetail=<?php echo $product->product_id; ?> &cat_id=<?php echo $product->category_id; ?>"
                                       style='background:#fe4231;color:white'>View Details</a></li>
                              </ul>
                           </div>
                           <div class='pi-text'>
                              <a href='#'>
                                 <h5><?php echo htmlspecialchars($product->product_name); ?></h5>

                              </a>
                              <div class='product-price'>
                                 <?php echo htmlspecialchars($product->price); ?>
                                 Vnđ
                              </div>
                           </div>
                        </div>
                     </div>

                     <?php
                  }
                  ?>
               </div>
            </div>
         </div>
         <?php
      }
      ?>


   </div>
</main>
<?php
include_once('views/main/footer.php');
?>