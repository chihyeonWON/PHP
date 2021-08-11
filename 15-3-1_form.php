<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>회원 정보 입력</title>
</head>
<body>
  <h1>회원정보 입력</h1>
  <form name="signUp" method="post" action="./15-3-2_insert.php">
    <label for="userName">이름</label>
    <input type="input" id="userName" name="userName" placeholder="이름 입력"/><br />
    <label for="userId">ID</label>
    <input type="input" id="userId" name="userId" placeholder="ID 입력"/><br />
    <label for="userPw">비밀번호</label>
    <input type="password" id="userPw" name="userPw" placeholder="비밀번호 입력"/>
    <br />
    <label for="userGender">성별</label>
    <select name="userGender" id="userGender">
      <option value="m">남성</option>
      <option value="w">여성</option>
    </select><br />
    <label for="userEmail">
    <input type="email" id="userEmail" name="userEmail" placeholder="이메일 입력" /><br />
    <input type="submit" value="가입하기" />
  </form>
</body>
</html>
