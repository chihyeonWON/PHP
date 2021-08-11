<?php
  //패턴을 대입
  $pattern = '/^[^_][a-z0-9_]+$/';

  $myId = 'everdevel_12';

  if (preg_match($pattern, $myId, $matches)) {
    echo "값 {$myId}은 정규식 표현에 적합한 값입니다. ";
    echo "<pre>";
    var_dump($matches);
  }else{
    echo "사용불가한 아이디 입니다.";
  }
?>
