<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>for문을 이용한 select태그</title>
</head>
<body>
  <select id="birthMonth" name="birthMonth">
<?php
  for($i = 1; $i <= 12; $i++){ ?>
    <option value="<?=$i?>"><?=$i?></option>
<?php } ?>
  </select>
  <label for="birthMonth">월</label>
</body>
</html>
