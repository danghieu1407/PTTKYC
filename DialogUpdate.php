<div class="modal fade" id="UpdateProduct<?php echo $id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title font-weight-bold" id="exampleModalLongTitle">Update Product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="font-size: 30px;">&times;</span>
                </button>
            </div>
            <div class="modal-body text-left">
                <form action="back/UpdateProductProcess.php" method="POST" enctype="multipart/form-data">
                    <label for="txtName" class="font-weight-bold">Tên</label>
                    <input class="form-control font-weight-bold" type="text" name="txtName" placeholder="Name" value="<?php echo $row["ProductName"] ?>" required>
                    <label for="txtPrice" class="font-weight-bold">Giá</label>
                    <input class="form-control font-weight-bold" type="text" name="txtPrice" placeholder="Price" value="<?php echo $row["Price"] ?>" required>
                    <label for="txtDescription" class="font-weight-bold">Mô Tả</label>
                    <input class="form-control font-weight-bold" type="text" name="txtDescription" placeholder="Description" value="<?php echo $row["Description"] ?>" required>
                    <input type="hidden" name="ProductID" value="<?php echo $row["ProductID"] ?>">
                    <p class="font-weight-bold mb-2">Category</p>
                    <div class="input-group">
                        <select class="custom-select font-weight-bold" name="txtCategory" id="inputGroupSelect02">
                            <option <?php if($row["Category"] == "PC") echo "selected"?> value="PC">PC</option>
                            <option <?php if($row["Category"] == "Linhkien") echo "selected"?> value="Linhkien">Linh kiện</option>
                            <option <?php if($row["Category"] == "Banphim") echo "selected"?> value="Banphim">Bàn Phím</option>
                            <option <?php if($row["Category"] == "Chuot") echo "selected"?> value="Chuot">Chuột</option>
                        </select>
                        <div class="input-group-append">
                            <label class="input-group-text font-weight-bold" for="inputGroupSelect02">Category</label>
                        </div>
                    </div>
                    <p class="font-weight-bold mb-2">Image</p>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="ImageUpload"/>
                        <label class="custom-file-label text-truncate font-weight-bold" for="customFile">Choose file</label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary font-weight-bold" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary pl-4 pr-4 font-weight-bold">Cập nhật</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>