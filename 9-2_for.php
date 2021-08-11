<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>for문을 이용한 select태그</title>
</head>
<body>
  <select id="birthMonth" name="birthMonth">
<?php
  //4월에 기본 선택되도록 변수 선언
  $selectdMonth = 4;

  for($i = 1; $i <= 12; $i++){
    //selected 입력할 값 선언
    $selected = '';
    if($i == $selectdMonth){
      $selected = "selected";
    }
?>
    <option value="<?=$i?>" <?=$selected?>><?=$i?></option>
<?php } ?>
  </select>
  <label for="birthMonth">월</label>
</body>
</html>
