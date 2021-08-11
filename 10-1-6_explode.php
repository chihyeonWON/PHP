<?php
  $email = "everdevel@icloud.com";
  $emailArray = explode("@",$email);

  echo "<pre>";
  var_dump($emailArray);

  echo "이메일의 호스트 출력 <br />";
  echo $emailArray[1];
?>
