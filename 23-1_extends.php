<?php
  class operation{
    function plus($num1, $num2){
      $result = $num1 + $num2;
      return "{$num1} + {$num2} = ".$result;
    }
  }

  class load extends operation{}

  //load클래스의 인스턴스 생성
  $load = new load;
  // load클래스의 plus메소드
  echo $load->plus(1,2);
?>
