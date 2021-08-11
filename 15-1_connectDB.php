<?php
  $host = "localhost";
  $user = "root";
  $pw = "root";
  $dbName = "myFirstDB";
  $dbConnect = new mysqli($host, $user, $pw, $dbName);
  $dbConnect->set_charset("utf8");

  if(mysqli_connect_errno()){
    echo '데이터베이스 접속 실패';
    echo mysqli_connect_error();
  }
?>
