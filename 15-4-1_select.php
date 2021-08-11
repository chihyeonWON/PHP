<?php
  include_once "./15-1_connectDB.php";

  $myMemberID = 1; //불러올 회원번호
  $sql = "SELECT * FROM myMember WHERE myMemberID = {$myMemberID}";
  $result = $dbConnect->query($sql); //쿼리 송신

  $memberInfo = $result->fetch_array(MYSQLI_ASSOC);

  echo "<pre>";
  var_dump($memberInfo);

  echo "회원번호가 {$myMemberID}번인 회원의 이름은 ".$memberInfo['name'];
?>
