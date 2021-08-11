<?php
  //패턴을 대입
  $pattern = '/.verdevel/';

  $myWebServiceName = 'everdevel';

  if (preg_match($pattern, $myWebServiceName, $matches)) {
    echo "값 {$myWebServiceName}은 올바른 이름입니다. ";
    echo "<pre>";
    var_dump($matches);
  }else{
    echo "사용불가한 이름 입니다.";
  }
?>
