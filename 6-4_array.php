<?php
  $earth = array();

  $earth['nation'][0] = 'korea';
  $earth['nation'][1] = 'america';
  $earth['nation'][2] = 'canada';
  $earth['nation'][3] = 'japan';
  $earth['nation'][4] = 'germany';
  $earth['nation'][5] = 'france';
  $earth['nation'][6] = 'china';

  //var_dump는 배열의 내용을 보여줍니다.
  var_dump($earth);

  //줄 바꾸기
  echo "<br /><br /><br />";

  //독일을 출력하려면
  echo "\$earth['nation'][4]의 값은 ".$earth['nation'][4];
?>
