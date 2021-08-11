<?php
  $filePathName = "./myFiles/largeRow.php";
  if(file_exists($filePathName)){
    $fp = fopen($filePathName,'r');
    //읽어올 용량 설정 상황에 따라 다른값 넣어야 함
    $readByte = 512;
    if($fp){
      while(($fr = fgets($fp, $readByte)) != false){
          echo $fr."<br />";
      }
    }
  }
?>
