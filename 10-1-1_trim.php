<?php
  $str = " 안녕하세요. ";  //안녕하세요 앞뒤로 공백을 일부러 넣음

  //trim사용하지 않고 출력
  echo "trim()을 사용하지 않은 경우 <br />";
  echo "|".$str."|";

  echo "<br /><br />";

  //trim을 적용
  echo "trim()을 사용한 경우 <br />";
  echo "|".trim($str)."|";
?>
