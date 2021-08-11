<?php
  //패턴을 대입
  $pattern = '/^[가-힣]+$/';

  $myName = '김태영';

  if (preg_match($pattern, $myName, $matches)) {
    echo "값 {$myName}은 정규식 표현에 적합한 값입니다. ";
    echo "<pre>";
    var_dump($matches);
  }else{
    echo "이름에 특수문자, 영문 또는 숫자가 있는지 확인요망";
  }
?>
