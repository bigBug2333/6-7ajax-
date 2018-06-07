<?php
  //所有的php代码应该写到 <?php 
  //只要php的代码，一定要通过 http协议


  //1. 注意点：在php中，代码结束是必须要;结束
  //2. 中文会乱码，需要设置 响应头

  //让浏览器解析这段文本，当前html来解析即可。使用utf-8编码
  header("content-type:text/html;charset=utf-8");
  echo "hello world";

  echo "我是中国人";

  echo "<h1>Hello World</h1>"
?>