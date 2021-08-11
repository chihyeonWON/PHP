<?php
  // 임시저장된 정보
  $myTempFile = $_FILES['myImage']['tmp_name'];

  // 파일 타입 및 확장자 구하기
  $fileTypeExtension = explode("/", $_FILES['myImage']['type']);

  // 파일 타입
  $fileType = $fileTypeExtension[0];
  // 파일 확장자
  $extension = $fileTypeExtension[1];

  //이미지 파일이 맞는지 확인
  if($fileType == 'image'){
    // 허용할 확장자를 jpg, bmp, gif, png로 정함 그외는 업로드 불가
    if($extension == 'jpeg' || $extension == 'bmp' || $extension == 'gif' || $extension == 'png'){
      // 임시 파일 옮길 저장 및 파일명
      $myFile = "./images/happyCat.{$extension}";
      // 임시 저장된 파일을 우리가 저장할 장소 및 파일명으로 옮김
      $imageUpload = move_uploaded_file($myTempFile,$myFile);

      //업로드 성공 여부 확인
      if($imageUpload == true){
        echo '파일이 정상적으로 업로드 되었습니다. ';
        echo "<img src='{$myFile}' width='100'/>";
      }else{
        echo '파일 업로드에 실패했습니다. ';
      }
    }
    //확장자가 jpg, bmp, gif, png가 아닐때
    else{
      echo "허용하는 확장자는 jpg, bmp, gif, png 입니다.";
      exit;
    }
  }
  // type이 image가 아닐때
  else{
    echo "이미지 파일이 아닙니다. ";
    exit;
  }
?>