<?php require 'back/SetCookie.php'?>
<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Catalog</title>
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="top_nav">
                <a href="TrangChu.php" class="active_background">Trang Chủ</a>
                <a href="Catalog.php">Danh Mục Sản Phẩm</a>
                <!-- <a onclick="laprapmaytinh()">Lắp Ráp Máy Tính</a> -->
                    <!-- <a href="https://gamek.vn">Tin Công Nghệ</a> -->
                    <?php include 'back/GetNumProductByToken.php' ?>
                <form action="Cart.php" method="GET">
                    <button id="button-cart"><i class="fa fa-shopping-cart"> (<?php echo $Item ?>)</i></button>
                </form>
              
                <div    class="search-container">
                    <form action="Catalog.php" method="GET">
                        <input type="text" placeholder="Search..." name="SearchKey" value="<?php if (isset($_GET["SearchKey"])) echo $_GET["SearchKey"] ?>">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="body-left column">
                <div class="category">
                    <h3 style="text-align: center; font-size: 50px; margin-bottom: 20px;">Danh mục</h3>
                    <a href="Catalog.php?Danhmuc=PC">PC</a>
                    <a href="Catalog.php?Danhmuc=Linhkien">Linh kiện PC </a>
                    <a href="Catalog.php?Danhmuc=Banphim">Bàn Phím</a>
                    <a href="Catalog.php?Danhmuc=Chuot">Chuột</a>
                </div>
            </div>
            <div class="body-right column">
                <div class="card-container">
                    <?php include 'back/LoadMenuProcess.php'?>
                </div>
            </div>
        </div>
    </div>
    <footer>>Có Làm Mới Có Ăn<</footer>
</body>
<script>
 function laprapmaytinh(){
        alert("Quý khách vui lòng gọi 0708820971 gặp anh Huy đẻ biết thêm về dịch vụ này");


    }
</script>
</html>