
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/loginstyle.css">
    <title>Đăng nhập</title>
</head>

<body>
    
    <div class="container">
        <div class="card-login">
            <div class="header">
                <h2>Đăng Nhập</h2>
            </div>
            <div class="input">
                <form action="back/loginprocess.php" method="POST">
                    <input type="text" name="Username" placeholder="Tên đăng nhập" required>
                    <input type="password" name="Password" placeholder="Mật khẩu" required>
                    <span style="font-size:15px; color:red"><?php if(isset($_GET["msg"]) && $_GET["msg"] === "InvalidAccount") echo "Invalid user name or password please try again" ?></span>
                    <input type="submit" name="Login" value="Đăng Nhập">
                </form>
            </div>
        </div>
    </div>
    

</body>

</html>