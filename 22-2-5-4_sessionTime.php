<?php
  session_start();

  //세션을 배열형으로 선언
  $_SESSION['mySession10'] = array();
  //값을 대입 위해 2차원 배열 선언
  $_SESSION['mySession10']['value'] = 'everdevel';
  //세션 생성 시간 대입 위해 2차원 배열 선언
  $_SESSION['mySession10']['generation'] = time();
  //세션 지속 시간 대입 위해 2차원 배열 선언
  $_SESSION['mySession10']['duration'] = 10;

  //mySession10세션의 값 확인
  echo "<pre>";
  var_dump($_SESSION['mySession10']);
?>
