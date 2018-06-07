<?php
  header("content-type:text/html;charset=utf-8");
  //判断
  // $num = 17;
  // if($num >= 18) {
  //   echo "恭喜你，可以访问本网站";
  // }else {
  //   echo "你还小，过两年再来";
  // }

  // //循环
  // for($i = 0; $i < 10; $i++) {
  //   echo $i;
  // }


  // $arr = ["张三", "李四", "王五"];
  // //遍历这个数组
  // //在php中，获取数组的长度： count
  // //echo count($arr);

  // for($i = 0; $i < count($arr); $i++) {
  //   echo $arr[$i];
  // }


  $arr1 = array("name"=>"zs", "age"=>18, "gender"=>"男");
  foreach($arr1 as $k => $v) {
    echo $v;
  }



?>