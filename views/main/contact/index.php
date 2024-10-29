<?php
include_once('views/navbar.php');
?>

<body>
    <div id="contact" class="container" >
        <div class="container" style="margin-top: 7.5%;">
            <p class="fs-2 text-center">THÔNG TIN LIÊN HỆ</p>
        </div>

        <div class="col-lg-5">
            <div class="contact-title">
                <h4>Liên hệ:</h4>
            </div>
            <div class="contact-widget">
                <div class="cw-item">
                    <div class="ci-icon">
                        <i class="ti-world"></i>
                    </div>
                    <div class="ci-text">
                        <span>Chi nhánh:</span>
                        <p>TP.HCM</p>
                    </div>
                </div>
                <div class="cw-item">
                    <div class="ci-icon">
                        <i class="ti-location-pin"></i>
                    </div>
                    <div class="ci-text">
                        <span>Địa chỉ:</span>
                        <p>268 Lý Thường Kiệt, Phường 14, Quận 10, TP.HCM</p>
                    </div>
                </div>
                <div class="cw-item">
                    <div class="ci-icon">
                        <i class="ti-mobile"></i>
                    </div>
                    <div class="ci-text">
                        <span>Số điện thoại:</span>
                        <p>0 123 456 789</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5 p-4">
            <div class="contact-form">
                <div class="leave-comment">
                    <h4>Gửi mail liên hệ</h4>
                    <form action="contact.php" class="comment-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Your name" class="form-control" name="name" required>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Your email" class="form-control" name="email" required>
                            </div>
                            <div class="col-lg-12">
                                <input type="text" placeholder="Message Subject" class="form-control" name="subject" required>
                            </div>
                            <div class="col-lg-12">
                                    <textarea placeholder="Your message" class="form-control" name="message"></textarea>
                                <button class="site-btn" name="submit">Send message</button>
                            </div>
                        </div>
                    </form>

                    <?php
                    if (isset($_POST['submit'])) {
                        $user_name = $_POST['name'];
                        $user_email = $_POST['email'];
                        $user_subject = $_POST['subject'];
                        $user_msg = $_POST['message'];
                        $receiver_mail = 'nguyenvana619@gmail.com';
                        mail($receiver_mail, $user_name, $user_subject, $user_msg, $user_email);
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

<?php
include_once('views/footer.php');
?>
