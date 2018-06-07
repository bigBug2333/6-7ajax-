<?php
  header("content-type:text/html;charset=utf-8");
  //admin   admin  :用户登录成功

  //1. 获取到用户提交的数据
  //php内置的一个数组，数组中本次get请求的所有参数
  //print_r($_GET);


  //获取到用户名和密码
  $username = $_GET["username"];
  $password = $_GET["password"];

  if($username === "admin" && $password === "admin") {
    echo "<h1>恭喜你，登录成功</h1>";
  }else {
    echo "<h1>用户名或者密码错误</h1>";
  }


?>