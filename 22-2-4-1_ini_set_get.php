<?php
  ob_start();
  //php설정 항목중 session.cookie_lifetime의 값을 가져와서 0이면 변경
  if(ini_get('session.cookie_lifetime') == 0){
    //세션 유지 시간을 10초로 변경
    ini_set('session.cookie_lifetime', 10);
  }
  session_start();

  //세션생성
  $_SESSION['mySession'] = 'everdevel';

  //생성되었는지 확인
  if(isset($_SESSION['mySession'])){
    echo "세션 생성 완료 값 : {$_SESSION['mySession']}";
  }else{
    echo "세션 생성 실패";
  }
?>
