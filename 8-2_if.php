<?php
  $data = "데이터형";

  if(gettype($data) == 'string'){
    echo "데이터형은 문자열 입니다.";
  }else if(gettype($data) == 'integer'){
    echo "데이터형은 정수형 입니다.";
  }else{
    echo "데이터형은 문자열도 정수형도 아닙니다.";
  }
?>
