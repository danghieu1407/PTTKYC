<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="Style/style.css">

    <title>Trang Chủ</title>
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="top_nav">
                <a href="index" class="active_background">Trang Chủ</a>
                <a href="Catalog.php">Danh Mục Sản Phẩm</a>
                <!-- <a href="https://gamek.vn">Tin Công Nghệ</a> -->
            </div>
            <div class="slideshow-container">
                <div class="mySlides">
                    <img src="images/1.jpg" style="width:100%" height="600px">
                </div>
                <div class="mySlides">
                    <img src="images/2.jpg" style="width:100%" height="600px">
                </div>

                <div class="mySlides">
                    <img src="images/3.jpg" style="width:100%" height="600px">
                </div>

                <div class="mySlides">
                    <img src="images/4.jpg" style="width:100%" height="600px">
                </div>
                <div class="mySlides">
                    <img src="images/5.jpg" style="width:100%" height="600px">
                </div>
                <div class="mySlides">
                    <img src="images/6.jpg" style="width:100%" height="600px">
                </div>
                
            </div>
            <div class="Go-Menu">
                <a href="TrangChu.php" onclick="tuvanvien()">Hotline: 0947072684</a>
            </div>
            <div style="text-align:center">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>

            </div>
        </div>
    </div>
    <footer>>Có Làm Mới Có Ăn<</footer>
</body>
<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 2000);
    }

    function tuvanvien(){
        alert("Quý khách vui lòng gọi 0947072684 gặp anh Hiếu để biết thêm chi tiết đừng sợ vì cước phí là 0đ");


    }
</script>

</html>