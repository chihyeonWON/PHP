<?php
  include_once "./15-1_connectDB.php";

  $linkNum = (int) $_GET['linkNum'];

  if($linkNum == 0){
    exit;
  }

  $sql = "INSERT INTO linkClickCount(linkNum, regTime)";
  $sql .= "VALUES({$linkNum}, NOW())";
  $dbConnect->query($sql);
?>
