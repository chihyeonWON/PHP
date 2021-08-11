<?php
  ob_start();
  session_start();

  if(isset($_SESSION['userId'])){
      echo "세션이 존재합니다. 세션값 : {$_SESSION['userId']}";
  }else{
    echo "세션이 종료되었습니다.";
  }
?>
