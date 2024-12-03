<?php
require_once("views/main/navbar.php");

?>
<div class="container my-5">
    <!-- Thông Tin Cá Nhân -->
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <h5>Thông Tin Cá Nhân</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Họ Tên: </strong><?php echo htmlspecialchars($data['user']->getFullName()); ?></p>
                    <p><strong>Email: </strong><?php echo htmlspecialchars($data['user']->getEmail()); ?></p>
                    <p><strong>Số Điện Thoại: </strong><?php echo htmlspecialchars($data['user']->getPhone()); ?></p>
                </div>
                <div class="col-md-6">
                    <p><strong>Địa Chỉ: </strong> <?php echo htmlspecialchars($data['user']->getAddress()); ?></p>
                    <p><strong>Ngày Tham Gia: </strong><?php echo htmlspecialchars($data['user']->getCreatedAt()); ?></p>
                </div>
            </div>
            <a href="#" class="btn btn-primary">Chỉnh Sửa Thông Tin</a>
        </div>
    </div>

    <!-- Danh Sách Đơn Hàng -->
    <div class="card">
        <div class="card-header bg-success text-white">
            <h5>Danh Sách Đơn Hàng</h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead class="table-success">
                    <tr>
                        <th>#</th>
                        <th>Mã Đơn Hàng</th>
                        <th>Ngày Đặt</th>
                        <th>Tổng Tiền</th>
                        <th>Phương thức thanh toán</th>
                        <th>Trạng Thái</th>
                    </tr>
                </thead>
                <tbody id="list-orders" data-orders='<?php echo json_encode($data['orders']); ?>'>
                    <!-- data in here -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once("views/main/footer.php"); ?>