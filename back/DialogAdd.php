<div class="modal fade" id="AddProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title font-weight-bold" id="exampleModalLongTitle">Add Product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="font-size: 30px;">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="back/AddProductProcess.php" method="POST" enctype="multipart/form-data">
                    <label for="txtName" class="font-weight-bold">Tên Sản Phẩm</label>
                    <input class="form-control font-weight-bold" type="text" name="txtName" placeholder="Name" required>
                    <label for="txtPrice" class="font-weight-bold">Giá</label>
                    <input class="form-control font-weight-bold" type="text" name="txtPrice" placeholder="Price" required>
                    <label for="txtDescription" class="font-weight-bold">Mô Tả</label>
                    <input class="form-control font-weight-bold" type="text" name="txtDescription" placeholder="Description" required>
                    <p class="font-weight-bold mb-2">Danh mục sản phẩm</p>
                    <div class="input-group">
                        <select class="custom-select font-weight-bold" name="txtCategory" id="inputGroupSelect02">
                            <option selected value="PC">PC</option>
                            <option value="Linhkien">Linh Kiện PC</option>
                            <option value="Banphim">Bàn Phím</option>
                            <option value="Chuot">Chuột</option>
                        </select>
                        <div class="input-group-append">
                            <label class="input-group-text font-weight-bold" for="inputGroupSelect02">Danh Mục</label>
                        </div>  
                    </div>
                    <p class="font-weight-bold mb-2">Hình Ảnh</p>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="ImageUpload" required />
                        <label class="custom-file-label text-truncate font-weight-bold" for="customFile">Chọn file</label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary font-weight-bold" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary pl-4 pr-4 font-weight-bold">Thêm</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>