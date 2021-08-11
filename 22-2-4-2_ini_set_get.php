<?php
  ob_start();
  if(ini_get('session.cookie_lifetime') == 0){
    ini_set('session.cookie_lifetime',10);
  }
  session_start();

  if(isset($_SESSION['mySession'])){
    echo "세션이 유지되고 있습니다. 값 : {$_SESSION['mySession']}";
  }
  else{
   echo "세션이 없습니다.";
 }
?>
