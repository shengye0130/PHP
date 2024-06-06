<?php 
    //登出讓儲存在網頁的紀錄清除
    session_start();
    unset($_SESSION["id"]);
    echo "登出成功~";
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
?>