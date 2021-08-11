<?php
  $filePathName = "./myFiles/helloWorld.txt";
  //파일 존재 여부 확인
  if(file_exists($filePathName)){
    //파일 열기
    $fp = fopen($filePathName, 'r');
    if($fp){
      //파일 읽기
      $fr = fread($fp, filesize($filePathName));
      if($fr){
        echo $fr; //내용출력
        fclose($fp); //파일 닫기
      }else{
        echo "파일 읽기에 실패했습니다.";
      }
    }else{
      echo "파일 열기에 실패했습니다.";
    }
  }else{
    echo "파일이 존재하지 않습니다.";
  }
?>
