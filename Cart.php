<?php require 'back/SetCookie.php' ; include 'Order.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/Cart.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Cart</title>
</head>

<body>
    <div class="container-cart">
        <div class="content">
            <div class="top_nav">
                <a href="TrangChu.php" class="active_background">Trang Chủ</a>
                <a href="Catalog.php">Danh Mục Sản Phẩm</a>
                <!-- <a href="http://gamek.vn">Tin Công Nghệ</a> -->
            </div>
            <div class="product">
                <table>
                    <tr class="header">
                        <th>Sản Phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                        <th>Chỉnh sửa</th>
                    </tr>
                    <?php include 'back/LoadCartProcess.php' ?>
                </table>
                <div class="final">
                    <h1>Tổng thanh toán: <i><?php echo $TotalPrice  ?> VND</i></h1>
                    <button type="button" id="button-order" class="btn btn-primary font-weight-bold" data-toggle="modal" data-target="#Order">
                        Thanh Toán
                    </button>
                </div>

            </div>
        </div>
    </div>
    <footer> > Có Làm Mới Có Ăn<</footer>
</body>
<script>
 function laprapmaytinh(){
        alert("Quý khách vui lòng gọi 0708820971 gặp anh Huy đẻ biết thêm về dịch vụ này");


    }
</script>

</html>