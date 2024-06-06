<html>
    <head><title>修改使用者</title></head>
    <body>
    <?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'");
        $row=mysqli_fetch_array($result);
        echo "
        <form action=20.user_edit.php method=post>
            <input type=hidden name=id value={$row['id']}>
            <!--顯示id-->
            帳號：{$row['id']}<br> 
            密碼：<input type=text name=pwd value={$row['pwd']}><br> 
            <input type=submit value=修改>
        </form>
        ";
    }
    ?>
    </body>
</html>
