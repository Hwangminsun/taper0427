<?
		session_start();
?>

<!doctype html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TAPERED COFFEE</title>
	<link rel="stylesheet" href="../css/reset.css">
	<!-- <link rel="stylesheet" href="../css/base.css"> -->
	<link rel="stylesheet" href="../css/login_form.css">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
		
	<script src="../js/jquery-1.11.2.min.js"></script>
  	<script src="../js/menu.js"></script>
	  <script src="https://kit.fontawesome.com/dbb7afa741.js" crossorigin="anonymous"></script>
  	<script src="../js/bottomnav.js"></script>

<script>
</script>		
</head>

<body>

<div id="skip-menu">
    <a href="#menu_wrap">&#187; 메뉴 바로가기</a>
    <a href="#group">&#187; 내용 바로가기</a>
  </div>

  <!-- header -->
  <header class="cf">
    <!-- 모바일 햄버거 버튼 -->
    <div id="ham-wrap">
      <div class="hamburger">
         <span></span>  <span></span> <span></span> 
      </div> 
  </div>

    <h1><a href="../index.html"><img src="../img/taper-logo.png" alt="logo"></a></h1>
    <!-- 태블릿, pc 버전 사용 -->
    <ul class="right">
        <li><a href="#" onclick="return false;"><i class="fa-solid fa-arrow-right-to-bracket"></i></a></li>
        <li><a href="#" onclick="return false;">Login</a></li>
        <li><a href="javascript:void(0)"><i class="fa-solid fa-file-pen"></i></li>
        <li><a href="#contact">Service</a></li>
        <li><a href="javascript:void(0)"><i class="fa-solid fa-map"></i></a></li>
        <li><a href="#cafe_resize">Location</a></li>
    </ul>
  </header>

  <!-- 모바일 버전 사용 -->
  <div class="bottomNav" id="usp_sell">
    <ul>
      <li><a href="#" class="current"><i class="fa-solid fa-arrow-right-to-bracket"></i></a></li>
      <li><a class="map" href="#cafeloca"><i class="fa-solid fa-map"></i></a></li>
      <li><a href="#contact"><i class="fa-solid fa-file-pen"></i></a></li>
      <li><a href="javascript:void(0)">Login</a></li>
      <li><a href="javascript:void(0)">Location</a></li>
      <li><a href="javascript:void(0)">Service</a></li>
    </ul>
  </div>

  <nav id="menu-wrap"> <!--메뉴 전체-->
      <ul class="menu">
        <li><a href="#" onclick="return false;">Menu</a></li>
        <li><a href="#" onclick="return false;">Store</a></li>
        <li><a href="#" onclick="return false;">Brand</a></li>
      </ul>   
  </nav>

  <aside>
    <div class="go-top"></div>
  </aside>
  <!-- header 끝 -->

<section>
	<h2>Login &nbsp;| &nbsp;로그인</h1>
	
	<div id="group1">
		<div class="close_1">
			<span class="close1_1"></span>
			<span class="close2_1"></span>
		</div>
	</div>
	
	<div id="join_mem"> <!-- 여기부터 form id, class 회원가입과 다르게 변경해야 함
login_form.css 도 같이 변경해주기 -->
		<form name="member_form" method="post" action="login.php">
			<div id="form_join">
				<div id="join">
					<ul>
						<li>
							<input type="text" name="id" placeholder=" 아이디">							
						</li>
						<li><input type="password" name="pass" placeholder=" 비밀번호">
          </li>						
				</ul>
			</div>		
		</div>
		<div id="button_log">
			<button type="submit">Login</button>
		</div>

<hr>

<ul class="member_find">
  <li><a href="member_form.php">회원가입</a></li>
  <li class="find"><a href="">아이디 · 비밀번호 찾기</a></li>
<ul>

		</form>
	</div>
</section>

<footer>
  <div id="footer"><a href="https://www.instagram.com/taperedcoffee/"
    target="_blank">photo by TAPERED COFFEE INSTAGRAM</a></div>
</footer>

</body>
</html>