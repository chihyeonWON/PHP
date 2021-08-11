<?php
  setcookie('myCookie','itIsCookie',time() + 10000,'/');

  if(isset($_COOKIE['myCookie'])){
    echo "쿠키 생성 완료 쿠키의 값은 {$_COOKIE['myCookie']}";
  }else{
    echo "쿠키 생성 실패";
  }
?>