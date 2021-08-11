<?php
  $str = "문자열";
  echo "데이터형 변경전의 데이터형 ".gettype($str)."<br />";

  $str = (int) $str;
  echo "데이터형 변경 후의 데이터형 ".gettype($str)." 값은 {$str}";
?>
