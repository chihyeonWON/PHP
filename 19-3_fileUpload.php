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
      //저장할 파일명 생성
      $makingFileName = "myImage".time().rand(1,99999)."."."{$extension}";

      //move_uploaded_file에 넣기 위해 경로와 함께 생성한 파일명 대입
      $myFile = "./images/{$makingFileName}";

      $dir = "./images/";

      //디렉토리 존재 여부 확인
      if(is_dir($dir)){
        //디렉토리 열기
        $opendir = opendir($dir);
        if($opendir == true){
          $checkFile = true;
          //디렉토리 읽기
          while(($readFile = readdir($opendir)) != false){
            //해당 파일이 있다면 변수 checkFile에 false를 대입
            if($makingFileName == $readFile){
              $checkFile = false;
              echo "해당 파일명은 이미 사용되고 있습니다.";
              break;
            }
          }
          if($checkFile == true){
            // 임시 저장된 파일을 우리가 저장할 장소 및 파일명으로 옮김
            $imageUpload = move_uploaded_file($myTempFile,$myFile);

            //업로드 성공 여부 확인
            if($imageUpload == true){
             echo '중복된 파일명이 없어 정상적으로 업로드 되었습니다. ';
             echo "<img src='{$myFile}' width='100'/>";
            }else{
              echo '파일 업로드에 실패했습니다. ';
            }
          }
        }

        //폴더를 열지 못했을때
        else{
          echo "해당 폴더를 열지 못했습니다. ";
          exit;
        }
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
