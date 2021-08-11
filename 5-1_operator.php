<?php
  $num = 20;
  $num2 = 3;

  echo "변수 \$num의 값은 {$num} 이며 변수 \$num2의 값은 {$num2}입니다. <br />";

  $plus = $num + $num2;
  $minus = $num - $num2;
  $mul = $num * $num2;
  $division = $num / $num2;
  $rest = $num % $num2;

  echo "{$num} 더하기 {$num2}는 ". $plus ."입니다. <br />";
  echo "{$num} 빼기 {$num2}는 ". $minus ."입니다. <br />";
  echo "{$num} 곱하기 {$num2}는 ". $mul ."입니다. <br />";
  echo "{$num} 나누기 {$num2}는 ". $division ."입니다. <br />";
  echo "{$num} 나누기 {$num2}의 나머지 값은 ". $rest ."입니다. <br />";
?>
