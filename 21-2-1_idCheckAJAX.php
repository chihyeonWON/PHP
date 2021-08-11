<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>화면 전환 없이 아이디 중복 체크</title>
<script type="text/javascript" src="../jQuery/js/jquery-3.1.0.min.js"></script>
<script>
//페이지가 모두 불러오면 작동
$(document).ready(function() {
  //중복 확인 버튼 클릭 이벤트
  $('#idCheckBtn').click(function(){
    //AJAX통신 시작
    $.ajax({
      type : 'post', //post 전송방식으로 전달
      dataType : 'json', //json 언어로 전달
      url : './21-2-2_idCheck.php',
      data : {userId : $('#userId').val()}, //전달할 데이터
      async : false, //값을 전달 받은 후 실행

      success: function (data) {
        //변수 word의 값 초기화
        var word = '이미 존재하는 아이디 입니다.';
        //해당 아이디가 없으면
        if(data.result == 'good'){
          word = '입력하신 아이디를 사용해도 좋습니다.';
        }
        $('#idCheckComment').text(word);
      },
      error: function (request, status, error) {
        console.log('request' + request);
        console.log('status' + status);
        console.log('error' + error);
      }
    });
  });
});
</script>
</head>
<body>
  <input type="text" name="userId" id="userId" placeholder="아이디 입력"/>
  <input type="button" id="idCheckBtn" value="중복 확인" />
  <div id="idCheckComment"></div>
</body>
</html>
