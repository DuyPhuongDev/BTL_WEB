<!-- dialog tk-->
<div class="dialog">
    <!-- Modal -->
    <div class="modal fade" id="editUser" tabindex="-1" aria-labelledby="editUserLabel" aria-hidden="true">
        <form id="editUserForm" class="needs-validation" action="#" method="POST" enctype="multipart/form-data" novalidate>
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editUserLabel">Chỉnh sửa thông tin</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="row g-3 modal-body">
                        <div class="col-md-6">
                            <label for="editusername" class="form-label">Tên đăng nhập</label>
                            <input type="text" name="username" id="editusername" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="editpassword" class="form-label">Mật khẩu</label>
                            <input type="password" name="password" id="editpassword" class="form-control">
                        </div>
                        <div class="col-12">
                            <label for="editfullName" class="form-label">Họ và tên</label>
                            <input type="text" name="fullName" id="editfullName" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="editemail" class="form-label">Email</label>
                            <input type="email" name="email" id="editemail" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="editphone" class="form-label">Số điện thoại</label>
                            <input type="text" name="phone" id="editphone" class="form-control">
                        </div>
                        <div class="col-12">
                            <label for="editaddress" class="form-label">Địa chỉ</label>
                            <input type="text" name="address" id="editaddress" class="form-control">
                        </div>
                        
                        <div class="col-12">
                            <label for="editroleId" class="form-label">Vai trò</label>
                            <select name="roleId" id="editroleId" class="form-select">
                                <option value="">Chọn vai trò</option>
                                <?php foreach ($roles as $role) : ?>
                                    <option value="<?php echo $role['roleId']; ?>"><?php echo $role['roleName']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary">Lưu sản phẩm</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- end dialog edit tk -->