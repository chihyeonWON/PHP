<?php
  if(isset($_COOKIE['myCookie'])){
    echo "쿠키 확인 : {$_COOKIE['myCookie']}";
  }else{
    echo "해당 쿠키가 존재하지 않습니다.";
  }
?>
