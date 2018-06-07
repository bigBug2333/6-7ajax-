<?php

  //1. 获取到上传的那个文件
 
  //$_GET:能够获取到所有get请求的值
  //$_POST:能够获取到所有post请求的值（简单值）
  //$_FILES: 专门用于获取上传到文件


  //上传文件的时候，php会把文件先保存到一个临时的目录，
  //如果在代码结束之前，没有保存这个文件的话，文件就没了。
  echo "<pre>";
  print_r($_FILES);

  //把临时的那个文件保存到我们想要保存到额位置即可
  //参数1：临时文件的地址
  //参数2：目标地址
  //move_uploaded_file();

  //临时文件的地址
  $tempFile = $_FILES["img1"]["tmp_name"];
  $fileName = $_FILES["img1"]["name"];

  $target = "uploads/" . $fileName;
  move_uploaded_file( $tempFile,  $target);

  echo "<img src=" . $target . ">"

?>