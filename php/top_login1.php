<?

//쿠키는 서버에 저장하지 안하고, 사용자 컴퓨터에만 저장되서 약간 위험이 있어서, 세션을 활용한다
//로그아웃을 안한 상황에서 계속 유지가 되야해서 세션을 사용한다

  if(!$_SESSION['username'] ) 
  {
?>
        <a href="login_form.php">Login test</a>
        
        <!--index.html 의 헤더 로그인 화면-->
<?
  }
  else
  {
?>
<!-- 로그인이 되면 상단에 보여지는 항목, usernick 은 닉네임 -->
        <a href="php/logout.php">Logout</a>
 
<?
  }
?>