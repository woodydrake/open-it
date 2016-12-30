<!doctype html>

<html>

	<head>
	<? include "../_inc/title.php"; ?>
	
	<!--입력란 확인 생성(지욱)-->
	<script type="text/javascript">
		function login_check(){
			var user_id = $("#user_id").val();
			var user_pwd = $("#user_pwd").val();
			var id_save = $("input:checkbox[id='id_save']").is(":checked");

			if (user_id == "") {
				alert("아이디를 입력하세요.");
				$("#user_id").focus();
				return false;
			}
			if (user_pwd == "") {
				alert("비밀번호를 입력하세요.");
				$("#user_pwd").focus();
				return false;
			}
			$("#loginFrm").submit();

		}	
	</script>
	<!--입력란 확인 생성(지욱) 끝-->
	</head>
	<body>
		<div id="wrap">			
			<? include "../_inc/fix_left.php"; ?>
			<? include "../_inc/q_menu.php"; ?>
			<div id="contents">
				<div class="sub_cont">
					<div class="tit">
						<h2>로그인</h2>
						<ol class="his">
							<li><a href="/"><img src="/_img/comn/home.png" alt="홈" /></a></li>
							<li><a href="/member/login.php" class="here">로그인</a></li><!--<a href="#" class="here">-->
						</ol>
					</div>
					<div class="s_cont">
						<div class="login_box">
							<p class="lo_tit01"><span>코리아 퀼트 스쿨 </span>에 오신것을 환영합니다.</p>
							<p class="lo_tit02 mt20">로그인을 하시면 더욱더 다양한 서비스를 즐기실 수 있습니다. <br/>회원가입이 되어있지 않으신 분은 회원가입 후 이용해 주시기 바랍니다.</p>
							<form name="loginFrm" id="loginFrm" action="../member/login_proc.php" method="post"><!--로그인 폼 생성(지욱)-->
							<ul class="login">
								<li>
									<p><span style="width:68px;">아이디</span><input type="text" name="user_id" placeholder="아이디를 입력해주세요"  /></p><!--<input type="text" placeholder="아이디를 입력해주세요"  />-->
									<p class="pa"><span style="width:68px;">비밀번호</span><input type="password" name="user_pwd" placeholder="비밀번호를 입력해주세요"/></p><!--<input type="password" placeholder="비밀번호를 입력해주세요"/>-->
								</li>
								<li class="btn"><a href="JavaScript:login_check()" >로그인</a></li><!--<a href="#" >-->
							</ul>
							</form><!--로그인 폼 생성(지욱) 끝-->

							<p class="checks01"><input type="checkbox" name="checks" id="info" style="vertical-align:-2px; margin-top:10px; margin-left:5px;"> <label for="info">아이디저장</label></p>
						</div>	

						<ul class="find_box">
							<li>
								<h5>회원님의 아이디나 비밀번호를 잊어버리셨나요?</h5>
								<p class="mt15"><a href="/member/find_id.php">아이디 찾기</a>&nbsp;&nbsp;<a href="/member/find_pa.php">비밀번호 찾기</a></p>
							</li>
							<li>
								<h5>코리아퀼트스쿨의 보다 다양한 서비스를 즐기 실 수 있습니다.</h5>
								<p class="mt15"><a href="/member/join_sel.php">회원가입</a></p>
							</li>
						</ul>
						
					</div>
			</div>
		</div>
		
	</body>

	<? include "../_inc/f_jsp.php"; ?>

</html>
