<?php
    header("content-type:text/html;charset=utf-8");

    $username = $_GET["username"];
    $password = $_GET["password"];
  
    if($username === "admin" && $password === "admin") {
      echo "<h1>恭喜你，登录成功</h1>";
    }else {
      echo "<h1>用户名或者密码错误</h1>";
    }
?>