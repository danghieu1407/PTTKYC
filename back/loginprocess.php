<?php 
    session_start();
    if(isset($_POST["Username"]) && !empty($_POST["Username"])
    && isset($_POST["Password"]) && !empty($_POST["Password"])) {
        require_once 'DatabaseAccess.php';
        $UserName = $_POST["Username"];
        $Password = $_POST["Password"];
        $query = "SELECT * FROM account WHERE UserName = ? AND Password = ?";
        $stmt = $connection->prepare($query);
        $stmt->bind_param("ss" , $UserName , $Password);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows == 1) {
            $_SESSION["UserName"] = $UserName;
            
            header("Location: ../Product.php");
        }else {
            header("Location: ../login.php?msg=InvalidAccount");
        }

    }
?>