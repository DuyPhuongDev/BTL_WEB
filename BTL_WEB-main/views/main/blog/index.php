<?php
include_once('views/main/navbar.php');
?>

<body>
    <section id="blog" style="margin-top: 7.5%;">
    <div class="text-center fs-2 fw-bold">TIN TỨC</div>
      <div class="container mt-2">
        <div class="row">
          <div class="col-lg-12" id="new">

            <?php
              foreach ($newses as $news) {
                echo '
                  <article class="card mb-5">
                    <div class="row mx-2">
                        <div class="col-9">
                            <h6 class="card-title mt-3 fw-bold">
                            <a class="text-dark" href="index.php?page=main&controller=detail_blog&id='. $news->news_id .'&action=index">' . $news->title . '</a>
                            </h6>
                            <div class="card-subtitle mt-2 text-muted">
                                <small>
                                    <ul>
                                        <li class="card-subtitle"><i class="bi bi-clock"></i> <time>' . date("F j, Y, g:i a", strtotime($news->created_at)) . '</time></li>
                                        <li class="card-subtitle"><i class="bi bi-clock-history"></i> <time>' . date("F j, Y, g:i a", strtotime($news->updated_at)) . '</time></li>
                                        <li class="card-subtitle"><i class="bi bi-chat-dots"> </i>' . count($news->comments) . ' Bình luận</li>
                                    </ul>
                                </small>
                            </div>
                        </div>
                        <div class="col-3 text-center mt-3">
                            <a class="btn btn-dark" href="index.php?page=main&controller=detail_blog&id='. $news->news_id .'&action=index">Bình luận</a>
                        </div>
                    </div>
                    <div class="mx-3 mb-3">
                      <div class="fs-6 justify-content">
                        ' . $news->content . '
                      </div>
                    </div>
                  </article><!-- End blog entry -->
                ';
              }
            ?>
          </div>

        </div>
      </div>
    </section>
</body>

<?php
include_once('views/main/footer.php');
?>
