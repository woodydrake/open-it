<?php
include_once "../__RootDIR__.php";
include_once $RootDIR."/_include/_header.php";

$rtn_page = $_REQUEST["rtn_page"];

if( $_SESSION["ss_admin_id"] != "" && $_SESSION["ss_admin_name"] != ""  && $_SESSION["ss_admin_auth"]  != "" ){
	header("Location: /admin/potal/ps_list.php");
	exit;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<? include "./_inc/title.php"; ?>
<link href="_css/intro.css" type="text/css" rel="stylesheet"  media="screen" />

<script type="text/javascript">
$(document).ready(function(){
	$("#admin_id").blur(function () {
		if(	$.trim($("#admin_id").val()) == ""	){
			$("#admin_id").css("background","url(/admin/_img/intro/intro_tit01.gif) #f9f9f9 no-repeat 10px 9px");
		}
	});

	$("#admin_pw").blur(function () {
		if(	$.trim($("#admin_pw").val()) == ""	){
			$("#admin_pw").css("background","url(/admin/_img/intro/intro_tit02.gif) #f9f9f9 no-repeat 10px 9px");
		}
	});

	$("#admin_id").focus();

});//document

function fn_login() { 
	if ($("#admin_id").val() == "") {
		alert("아이디를 입력하세요.");
		$("#admin_id").focus();
		return false;
	}
	if ($("#admin_pw").val() == "") {
		alert("비밀번호를 입력하세요.");
		$("#admin_pw").focus();
	}
	
	$("#login_frm").submit();
}


</script>
</head>
<body>
	<div class="login_top">
		<h1><img src="_img/intro/logo.png" alt="코리아퀼트스쿨" style="width:119px; height:25px;"></h1>
	</div>
	<div id="shim" ></div>
	<div id="wrapper">
		<div class="intro">
			<form name="login_frm" id="login_frm" method="post" action="./login_proc.php" > <!-- 로그인 정보 전송폼-->
				<input type="hidden" name="rtn_page" value="<?=$rtn_page?>"/>
				<div class="adminpage">
					<p class="tit">코리아퀼드스쿨 관리자</p>
					<p class="tit02">관리자 로그인</p>
					<div class="login">
						<ul>
							<li><input type="text" name="admin_id" id="admin_id" onfocus="this.style.background='#f9f9f9'" onkeyup="if(event.keyCode==13) fn_login()" tabindex="1"/></li>
							<li class="pw"><input type="password" name="admin_pw" id="admin_pw" onfocus="this.style.background='#f9f9f9'" onkeyup="if(event.keyCode==13) fn_login()" tabindex="2"/></li>
						</ul>
						<p class="btn"><img onclick="fn_login()" src="_img/intro/btn_login.gif"  alt="로그인" style="cursor:pointer" tabindex="3"></p>						
					</div>
<?//					<p class="m_join"><img onclick="window.open('m_join.php','','width=480,height=430')" src="_img/intro/btn_m_join.gif" alt="회원등록" style="cursor:pointer"/></p> ?>
				</div>
			</form>
		</div>
		<div class="foot">
			<p> @COPYRIGHT 2016 <span>코리아퀼트스쿨</span> ALL RIGHT RESEVED</p>
		</div>
	</div>
</body>
</html>
