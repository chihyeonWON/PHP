<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>POST방식을 알기위한 form태그</title>
</head>
<body>
  <h1>간단한 입력폼</h1>
  <form name="data" method="post" action="12-3_post.php">
    <label for="email">email</label>
    <input type="email" name="email" id="email" placeholder="이메일 주소 입력"/>
    <label for="password">비밀번호</label>
    <input type="password" name="password" id="password" placeholder="비밀번호 입력"/>
    <input type="submit" value="전달" />
  </form>
</body>
</html>
