<?php
  session_start();

  //세션 생성
  $_SESSION['mySession5'] = 'everdevel';

  echo "세션 생성후 존재 여부 확인 <br />";
  //세션 존재 여부 확인
  if(isset($_SESSION['mySession5'])){
    echo "mySession5 세션이 존재합니다. <br />";
  }else{
    echo "mySession5 세션이 존재하지 않습니다. <br />";
  }

  //세션 삭제
  unset($_SESSION['mySession5']);

  echo "<hr />세션 삭제후 존재 여부 확인 <br />";
  //세션 존재 여부 확인
  if(isset($_SESSION['mySession5'])){
    echo "mySession5 세션이 존재합니다.";
  }else{
    echo "mySession5 세션이 존재하지 않습니다.";
  }
?>
