<?
		session_start();
?>

<!doctype html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
		<title>JOIN US | 회원가입</title>
		<link rel="stylesheet" href="../css/reset.css">
		<link rel="stylesheet" href="../css/base.css">
		<link rel="stylesheet" href="../css/member_form.css">
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
		
<script>
//let reg_pw2 = /(?=.*[a-zA-ZS])(?=.*?[#?!@$%^&*-]).{6,24}/; // 문자와 특수문자 조합의 6~24 자리
// const re1 = /^[a-zA-Z0-9]{4,12}$/ ;  //가능하다
//const re1 =/^(?=.*[a-zA-Z])(?=.*[!@#$%^*+=-])(?=.*[0-9]).{6,10}$/;
//const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//위의 식도 가능하다
//const re=/^[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,3}$/;

function check_id()
	{
		window.open("check_id.php?id=" + document.member_form.id.value, 
		// 새창으로 띄워라, get 방식으로 member_form 파일의 id 값을 가져옴?.. ? 물음표는 get 방식....?
				"IDcheck",
				"left=200,top=200,width=200,height=60,scrollbars=no,resizable=yes");
	}

	function check_nick()
	{
		window.open("check_nick.php?nick=" + document.member_form.nick.value,
				"NICKcheck",
				"left=200,top=200,width=200,height=60,scrollbars=no,resizable=yes");
	}

	function check_input()
	{
		const re1 =/^(?=.*[a-zA-Z])(?=.*[!@#$%^*+=-])(?=.*[0-9]).{6,10}$/;
		const id = document.member_form.id.value;
		if (!document.member_form.id.value)
			{
				alert("아이디를 입력하세요");
				document.member_form.id.focus();
				return;
	}else if(!re1.test(id)){
						alert("6~10자의 영문자, 숫자, 특수기호 혼합해서 사용할 수 있습니다");
		return false;
	}

	if (!document.member_form.pass.value)
	{
			alert("비밀번호를 입력하세요");
			document.member_form.pass.focus(); //해당 칸에 커서 깜빡이는 것
			return;
	}

	if (!document.member_form.pass_confirm.value)
	{
		alert("비밀번호확인을 입력하세요");
		document.member_form.pass_confirm.focus();
		return;
	}

	if (!document.member_form.name.value)
	{
		alert("이름을 입력하세요");
		document.member_form.name.focus();
		return;
	}

	if (!document.member_form.nick.value)
	{
		alert("닉네임을 입력하세요");
		document.member_form.nick.focus();
		return;
	}

	if (!document.member_form.hp.value)
	{
		alert("휴대폰번호를 입력하세요");
		document.member_form.hp.focus();
		return;
	}

	if (!document.member_form.email.value)
	{
		alert("이메일을 입력하세요");
		document.member_form.email.focus();
		return;
	}

	if (document.member_form.pass.value !=
			document.member_form.pass_confirm.value)
	{
		alert("비밀번호가 일치하지 않습니다.\n다시 입력해주세요.");
		document.member_form.pass.focus();
		document.member_form.pass.select();
		return;
	}

	const hp1=document.member_form.hp.value;
	const re2= /^01([0|1|6|7|9])-?([0-9]{3,4})-?([0-9]{4})$/;
	if (!re2.test(hp1)) {
			alert('휴대전화번호를 다시 입력해주세요.');
			return false;
	}

	const email=document.member_form.email.value;
	const re=/^[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,3}$/;
	if (!re.test(email)) {
			alert("@를 포함해서 입력해주세요");
		return false;
		}
		document.member_form.submit();
}

function reset_form() {
	document.member_form.id.value = "";
	document.member_form.pass.value = "";
	document.member_form.pass_confirm.value = "";
	document.member_form.name.value = "";
	document.member_form.nick.value = "";
	document.member_form.hp.value = "";
	document.member_form.email.value = "";
	document.member_form.id.focus();
	return;
}
</script>
		
</head>
<body>
	
	<h1>JOIN US &nbsp;| &nbsp;회원가입</h1>
	
	<div id="group">
		<div class="close">
			<span class="close1"></span>
			<span class="close2"></span>
		</div>
	</div>
	
	<div id="join_mem">
		<form name="member_form" method="post" action="insert.php">
			<div id="form_join">
				
				<div id="join2">
					<ul>
						<li>
							<div id="id1">
								<input type="text" name="id" placeholder="*아이디">
							</div>
							<div id="id2">
									<button type="button" onclick="check_id()">
								중복확인</button>
							</div>
						</li>
						<li><input type="password" name="pass" placeholder="*비밀번호"></li>
						<li><input type="password" name="pass_confirm" placeholder="*비밀번호 확인"></li>
						<li><input type="text" name="name" placeholder="*이름"></li>
						<li><input type="tel" class="hp" name="hp" placeholder="*휴대폰"></li>
						<li><input type="email" class="email1" name="email" placeholder="*Email"></li>
					</ul>
				</div>

				<div id="must"> * 는 필수 입력항목입니다.</div>
			</div>
			
			<div id="button">
				<button type="submit" onclick="check_input()">가입하기</button>
			</div>
		</form>
	</div>
</body>
</html>