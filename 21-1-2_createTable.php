<?php
  include_once "./15-1_connectDB.php";

  //테이블 생성 위한 쿼리문
  $sql = "CREATE TABLE linkClickCount(";
  $sql .= "linkClickCountID INT UNSIGNED NOT NULL AUTO_INCREMENT,";
  $sql .= "linkNum INT UNSIGNED NOT NULL COMMENT '링크 고유 번호',";
  $sql .= "regTime DATETIME NOT NULL COMMENT '클릭한 시간',";
  $sql .= "PRIMARY KEY (linkClickCountID))";
  $sql .= "CHARSET=utf8 comment='링크 클릭 수 집계'";

  $res = $dbConnect->query($sql);
  if($res){
    echo "테이블 생성 완료";
  }else{
    echo "테이블 생성 실패";
  }
?>
