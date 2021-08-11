<?php
  class hello{
    protected function say($word){
      echo $word;
    }
  }

  $hello = new hello;
  $hello->say('Hello World');
?>
