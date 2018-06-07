<?php

  header("content-type:text/html;charset=utf-8");
  //字符串拼串
  $name = "胡聪聪";

  $age = 18;

  $desc = "挺帅的";

  //在php里面，+只有算数的功能，没有拼串的功能，拼串使用.
  //echo "大家好,我是" . $name . "今年" . $age . "我长得" . $desc;

  //在php中，字符串可以是双引号，也可以是单引号
  //双引号中，  变量是可以是可以识别的  
  //单引号中，变量不可以识别
  echo "大家好，我是$name,今年$age,我长得$desc";
  echo "<br>";
  echo '大家好，我是$name,今年$age,我长得$desc';


?>