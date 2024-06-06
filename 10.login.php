<?php
//用SESSION結合資料庫登入
    #mysqli_connect() 建立資料庫連結
    $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    #mysqli_query() 從資料庫查詢資料
    $result=mysqli_query($conn, "select * from user");
    $login=FALSE;
    #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
    while ($row=mysqli_fetch_array($result)){
        if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])){
            $login=TRUE;
        }
    }

    if ($login==TRUE){
        session_start();
        $_SESSION["id"]=$_POST["id"];
        echo "登入成功!";
        echo "<meta http-equiv=REFRESH content='3; url=11.bulletin.php'>";
    }
    else{
        echo "登入失敗...五秒後回到登入畫面";
        echo "<meta http-equiv=REFRESH content='5; url=2.login.html'>";
    }
?>