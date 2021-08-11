<?php
  //패턴을 대입
  $pattern = '/^[a-zA-Z0-9_\-\.]+@[a-zA-Z\-]+\.[\.a-zA-Z]+$/';

  $myEmail = 'everdevel@icloud.com';

  if (preg_match($pattern, $myEmail, $matches)) {
    echo "입력한 이메일 주소 {$myEmail}는 사용가능한 이메일 주소 입니다. ";
    echo "<pre>";
    var_dump($matches);
  }else{
    echo "사용불가한 이메일 주소 입니다.";
  }
?>
