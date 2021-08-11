<?php
  class operation{
    function plus($num1, $num2){
      $result = $num1 + $num2;
      return "{$num1} + {$num2} = ".$result;
    }
  }

  class load extends operation{}
  class load2 extends operation{}

  //load클래스의 인스턴스 생성
  $load2 = new load2;
  // load클래스의 plus메소드
  echo $load2->plus(1,2);
?>
