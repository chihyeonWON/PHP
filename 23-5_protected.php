<?php
  class hello{
    protected function say($word){
      echo $word;
    }
  }
  //클래스 hello를 상속받음
  class hello2 extends hello{
      public function say2($word){
        //클래스 hello를 상속받았으므로 say메소드 접근가능
        $this->say($word);
      }
  }

  $hello2 = new hello2;
  $hello2->say2('Hello World');
?>
