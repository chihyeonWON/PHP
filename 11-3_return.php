<?php
  function plus($num1, $num2, $num3){
    $sum = $num1 + $num2 + $num3;

    return $sum;

    //위에서 return문이 실행되어 plus함수가 종료되므로
    //아래의 명령문은 실행이 안됨.
    $sum += 100;
  }

  echo "50 + 30 + 5는 ".plus(50, 30, 5);
?>
