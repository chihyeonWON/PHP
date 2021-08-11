<?php
  //member변수를 선언하고 데이터형을 배열로 선언
  $member = array();

  //member배열에 0인덱스를 생성하고 0인덱스도 배열로 선언
  $member[0] = array();
  //0인덱스를 들어갈 배열의 이름을 지정하고 값을 대입
  $member[0]['name'] = '김태영';
  $member[0]['userID'] = 'everdevelHost';
  $member[0]['email'] = 'everdevel@everdevel.com';

  //member배열에 1인덱스를 생성하고 1인덱스도 배열로 선언
  $member[1] = array();
  //1인덱스를 들어갈 배열의 이름을 지정하고 값을 대입
  $member[1]['name'] = '김태헌';
  $member[1]['userID'] = 'jake';
  $member[1]['email'] = 'jake@everdevel.com';

  //member배열에 2인덱스를 생성하고 2인덱스도 배열로 선언
  $member[2] = array();
  //2인덱스를 들어갈 배열의 이름을 지정하고 값을 대입
  $member[2]['name'] = '이지형';
  $member[2]['userID'] = 'tigger';
  $member[2]['email'] = 'tigger@everdevel.com';

  foreach($member as $data){
      echo $data['name']."<br />";
  }
?>