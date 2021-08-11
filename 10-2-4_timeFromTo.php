<?php
  ini_set('date.timezone','Asia/Seoul');

  //현재 예제를 구현 가능한 시간을 입력하세요.
  //시작 시간 설정 : 현재 시간으로 설정
  $startTime = mktime(15, 17, 0, 9, 20, 2017);
  //종료 시간 설정 : 현재 시간보다 1분 후로 설정
  $endTime = mktime(12, 18, 59, 9, 20, 2017);

  if($startTime <= time() && $endTime > time()){
    echo "이벤트에 참여하세요.";
  }else{
    echo "이벤트 시작 전이거나 종료되었습니다.";
  }
?>
