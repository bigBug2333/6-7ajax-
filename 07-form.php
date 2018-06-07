<?php
  header("content-type:text/html;charset=utf-8");
  //思路：
  //1. 获取到post请求的参数
  //2. 判断用户名和密码
  //print_r($_POST);
  //print_r($_GET);

  if( $_POST["username"] == "admin" && $_POST["password"] == "admin" ) {
    echo "恭喜你，登录成功";
  }else {
    echo "用户名或者密码错误";
  }


?>