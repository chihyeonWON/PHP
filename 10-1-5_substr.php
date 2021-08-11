<?php
  $fileName = "devilCat.jpg";
  // deveilCat.jpg에서 -4번째 위치하는
  // .부터 시작해서 4글자를 잘라내서 .jpg가 변수 execute에 대입됨
  $execute = substr($fileName, -4, 4);

  if($execute == '.jpg' || $execute == '.png' || $execute == '.bmp' || $execute == '.gif'){
    echo "업로드한 파일은 이미지 파일입니다. ";
  }else{
    echo "업로드한 파일은 이미지 파일이 아닙니다.";
  }
?>
