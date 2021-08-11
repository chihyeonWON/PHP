<?php
  $filePathName = "./myFiles/largeRow.php";
  $content = $_POST['myInputText'];
  $fp = fopen($filePathName, 'w');
  if($fp){
    $fw = fwrite($fp, $content);
    if($fw){
      echo "파일 쓰기 완료";
    }
  }
?>
