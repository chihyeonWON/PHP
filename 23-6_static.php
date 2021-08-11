<?php
  class hello{
    // static을 사용하여 메소드 생성
    static function output($word){
      echo "메세지를 출력하는 메소드<br />";
      echo $word;
    }
  }
  // 인스턴스 생성하지 않고 클래스 hello의 메소드 output 호출
  hello::output("hello world");
?>
