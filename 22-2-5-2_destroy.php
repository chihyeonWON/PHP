<?php
  session_start();

  //2개의 세션생성
  $_SESSION['mySession6'] = 'everdevel';
  $_SESSION['mySession7'] = 'beanscent';

  //생성된 세션 확인
  echo "<pre>";
  var_dump($_SESSION);

  //세션 파괴
  if(session_destroy()){
    echo "세션 파괴 완료";
  }
?>
