<html>
<head><title>佈告欄</title></head>
<body>

<?php
    error_reporting(0); //用來取消顯示第4行一定有的錯誤訊息
    session_start();
    if (!$_SESSION["id"]){
        echo "請先登入";
        echo "<meta http-equiv=REFRESH content='5; url=2.login.html'>";
    }
    else{
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $result=mysqli_query($conn, "select * from bulletin");
        echo "Hi!, ".$_SESSION["id"]."~  歡迎進入佈告欄首頁 ";
        echo "[<a href=12.logout.php>登出</a>] [<a href=18.user.php>管理使用者</a>]
              [<a href=22.bulletin_add_form.php>新增佈告</a>]<br>";
        echo "<table border=4><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>內容</td><td>發佈時間</td></tr>";
        while($row=mysqli_fetch_array($result)){
            echo "<tr><td><a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a> 
            <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>";
            echo $row["bid"];
            echo "</td>" . "<td>";
            echo $row["type"];
            echo "</td>" . "<td>";
            echo $row["title"];
            echo "</td>" . "<td>";
            echo $row["content"];
            echo "</td>" . "<td>";
            echo $row["time"];
            echo "</tr>";
        }
        echo "</table>";
    }
?>

</body>
</html>