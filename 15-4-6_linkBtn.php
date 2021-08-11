<?php
  include_once "./15-1_connectDB.php";

  $sql = "SELECT * FROM myMember";
  $res = $dbConnect->query($sql);

  $numView = 50;

  $totalRecord = $res->num_rows;
  //페이지 수
  $numPage = ceil($totalRecord / $numView);

  for($i = 1; $i <= $numPage; $i++){?>
    <a href="http://localhost/exampleSource/PHP/15-4-5_selectLimit.php?page=<?=$i?>">
      <?=$i?>
    </a>
  <?php } ?>
