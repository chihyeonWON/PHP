<?php
  include_once "./15-1_connectDB.php";

  $sql = "SELECT name, userId FROM myMember";
  $result = $dbConnect->query($sql); //쿼리 송신

  $numResult = $result->num_rows;
  if($numResult != 0){

    for($i = 0; $i < $numResult; $i++){
        $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
        echo "회원이름 : ".$memberInfo['name'].", 회원 ID : ".$memberInfo['userId']."<br />";
    }

  }else{
    echo '데이터가 없습니다. ';
  }
?>
