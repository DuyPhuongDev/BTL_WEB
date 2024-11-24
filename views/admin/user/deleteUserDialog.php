<!-- dialog tk-->
<div class="dialog">
        <!-- Modal -->
    <div class="modal fade" id="deleteUser" tabindex="-1" aria-labelledby="deleteUserLabel" aria-hidden="true">
        <form id="deleteUserForm" class="needs-validation" action="#" method="POST" enctype="multipart/form-data" novalidate>
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteUserLabel">Xoá tài khoản</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Bạn có chắc chắn muốn xoá tài khoản này không?</p>
                        <input type="text" name="userId" id="userId">
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Xoá</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- end dialog them tk -->