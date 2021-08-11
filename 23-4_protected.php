<?php
  class hello{
    protected function say($word){
      echo $word;
    }
    //public은 기본설정값이므로 기입하지 않아도 무관
    public function say2($word){
      //같은 클래스의 say메소드를 선언
      //say메소드는 protected로 선언되어 같은 클래스 안에서 접근 가능
      $this->say($word);
    }
  }

  $hello = new hello;
  //public로 선언된 say2메소드 호출
  $hello->say2('Hello World');
?>
