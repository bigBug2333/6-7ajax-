<?php
  header("content-type:text/html;charset=utf-8");
  //php中有两类数组
  //1. 索引数组, 通过下标来操作数组的元素
  //$arr = ["张三", "李四", "王五"];
  //$arr = array("张三", "李四", "王五");

  //echo $arr[0];
  //echo $arr[1];


  //2. 关联数组（类似于js中的对象）
  $arr = array( "name"=>"张三", "age"=>18, "gender"=>"男" );
  //echo $arr["name"];
  //echo $arr["age"];
  //echo $arr["gender"];


  //php的几种打印的方式
  //echo 值：  只能打印简单类型，不能打印复杂类型
  //print_r(值) 打印复杂类型的方式
  //var_dump(值) 


  //echo $arr;
  echo "<pre>";
  var_dump($arr);
  echo "</pre>";

?>