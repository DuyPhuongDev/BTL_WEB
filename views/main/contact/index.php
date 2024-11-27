<?php
include_once('views/main/navbar.php');
?>
<!-- Contact -->
<div class="container contact-section">
  <h1 class="text-center mb-5">Liên Hệ Với Chúng Tôi</h1>
  <div class="row">
      <!-- Contact Information -->
      <div class="col-md-6">
          <h3 class="mb-4">Thông Tin Liên Hệ</h3>
          <ul class="list-unstyled contact-details">
              <li><strong>Địa chỉ:</strong> 123 Đường Thời Trang, Quận 1, TP. Hồ Chí Minh</li>
              <li><strong>Số điện thoại:</strong> <a href="tel:+84912345678">+84 912 345 678</a></li>
              <li><strong>Email:</strong> <a href="mailto:contact@fashion.com">contact@fashion.com</a></li>
              <li><strong>Giờ làm việc:</strong> Thứ 2 - Thứ 7: 9:00 - 18:00</li>
          </ul>
          <div class="map-container">
              <!-- Google Maps Embed -->
              <iframe 
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.459808988389!2d106.69714927475404!3d10.77676159230273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3b5e12a6e5%3A0x8e6d6cbf0144b3c5!2zMTIzIMSQ4bqndSBUaOG7iyBUaOG7iywgIFF14bqtbiAxLCBUUC4gSMOgIENo4bqndSBN4buNY2g!5e0!3m2!1svi!2s!4v1696627034065!5m2!1svi!2s" 
                  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
              </iframe>
          </div>
      </div>
      <!-- Contact Form -->
      <div class="col-md-6">
          <h3 class="mb-4">Gửi Tin Nhắn</h3>
          <form>
              <div class="mb-3">
                  <label for="name" class="form-label">Tên của bạn</label>
                  <input type="text" class="form-control" id="name" placeholder="Nhập tên của bạn">
              </div>
              <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Nhập email của bạn">
              </div>
              <div class="mb-3">
                  <label for="message" class="form-label">Tin nhắn</label>
                  <textarea class="form-control" id="message" rows="5" placeholder="Nhập tin nhắn của bạn"></textarea>
              </div>
              <button type="submit" class="btn btn-dark w-100">Gửi</button>
          </form>
      </div>
  </div>
</div>

<?php
include_once('views/main/footer.php');
?>