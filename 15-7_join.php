<?php
  include_once "./15-1_connectDB.php";

  //마지막에 띄어쓰기 필수
  $sql = "SELECT m.name, m.gender, s.class, s.english, s.math, s.science, s.japanese, s.coding ";
  $sql .= "FROM myMember m JOIN schoolRecord s ON(m.myMemberID = s.studentID) ";
  $sql .= "WHERE m.myMemberID = 3";
  $res = $dbConnect->query($sql);

  if($res){
    $data = $res->fetch_array(MYSQLI_ASSOC);

    echo "회원번호 3번의 이름은 {$data['name']} 이며 <br />";

    $gender = '여성';
    if($data['gender'] == 'm'){
      $gender = '남성';
    }

    echo "성별은 {$gender} 이며 <br />";
    echo "{$data['class']}반 소속이며 <br />";
    echo "영어 점수는 {$data['english']}<br />";
    echo "수학 점수는 {$data['math']}<br />";
    echo "과학 점수는 {$data['science']}<br />";
    echo "일본어 점수는 {$data['japanese']}<br />";
    echo "코딩 점수는 {$data['coding']}";

 }else{
    echo "정보를 불러오는데 실패했습니다.";
  }
?>
