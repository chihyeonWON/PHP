<?php
  include_once "./15-1_connectDB.php";

  //중복 확인 요청받은 아이디
  $userId = $dbConnect->real_escape_string(trim($_POST['userId']));

  //쿼리문 생성
  $sql = "SELECT userId FROM myMember WHERE userId = '{$userId}'";
  //쿼리문 질의
  $res = $dbConnect->query($sql);

  //전달할 데이터
  $jsonResult = "bad";
  //해당하는 레코드수가 0이라면 중복되는 아이디가 없다는 뜻이므로
  if($res->num_rows == 0){
    // good을 대입
    $jsonResult = "good";
  }
  //전달할 수 있도록 json형태로 값 출력
  echo json_encode(array('result'=>$jsonResult));
?>