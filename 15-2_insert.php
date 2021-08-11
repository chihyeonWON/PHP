<?php
  //mysql접속 소스를 include함
  include_once "./15-1_connectDB.php";

  //입력할 데이터를 변수에 대입
  $userId = "miu0709";
  $name = "김미우";
  $userPW = "aldn";
  $phone = "010-1234-5678";
  $email = "kmu07@everdevel.com";
  $gender = "w";

  //쿼리문 작성
  $sql = "INSERT INTO myMember(userId, name, password, phone, email, gender, regTime) VALUES";
  $sql .= "('{$userId}','{$name}','{$userPW}','{$phone}','{$email}','{$gender}',NOW())";

  //쿼리문 전송및 전송값을 result변수에 대입
  $result = $dbConnect->query($sql);

  //데이터 입력이 완료되었는지 확인
  if($result){
    echo "데이터 입력 완료";
  }else{
    echo "데이터 입력 실패";
  }
?>
