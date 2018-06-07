<?php
  header("content-type:text/html;charset=utf-8");
  //如何定义php的变量
  //var num = 12;
  //1. 在php中，变量不需要定义的，直接用，变量在第一次赋值的时候会创建
  //2. php中所有的变量都是以$符号开头，其他命名规则与js一模一样
  //3. php中，也是弱类型的
  
  //字符串
  $name = "zs";
  echo $name;

  echo "<br/>";

  //数值类型
  $num = 11;
  echo $num;

  echo "<br/>";

  //在php里面，如果是true，打印出来的值是1
  //如果是false，打印是个空
  $flag = false;
  
  if($flag == true) {
    echo "这是真的";
  }else {
    echo "这是假的";
  }
  



?>