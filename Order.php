<div class="modal fade" id="Order" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title font-weight-bold" id="exampleModalLongTitle">Hoàn tất thanh toán</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="font-size: 30px;">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="#">
                    <div class="form-group font-weight-bold" style="font-size: 20px;">
                        <label for="txtName">Họ và tên của bạn</label>
                        <input style="font-size: 20px;" class="form-control font-weight-bold" type="text" name="txtName" required>
                        <label for="txtPhoneNumber">Số điện thoại</label>
                        <input style="font-size: 20px;" class="form-control font-weight-bold" type="tel" name="txtPhoneNumber" pattern="[0-9]{10}" required>
                        <label for="txtName">Địa chỉ</label>
                        <input style="font-size: 20px;" class="form-control font-weight-bold" type="text" name="txtName" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary font-weight-bold" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary pl-4 pr-4 font-weight-bold">Thanh toán</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>