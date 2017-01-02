<!doctype html>

<html>

	<head>
	<? include "../_inc/title.php"; ?>
	
	</head>

	<body>

		<div id="wrap">			
			<? include "../_inc/fix_left.php"; ?>

			<? include "../_inc/q_menu.php"; ?>
			
			<div id="contents">
				
				<div class="sub_cont">
				
					<div class="tit">
						<h2>회원가입</h2>
						<ol class="his">
							<li><a href="/"><img src="/_img/comn/home.png" alt="홈" /></a></li>
							<!--<li><a href="#">회원가입</a></li>-->
							<li><a href="/member/join_sel.php" class="here">회원가입 유형선택</a></li><!--<a href="#">-->
						</ol>
					</div>

					<div class="s_cont">

						<ul class="find_box">
							<li>
								<p class="c mb20"><img src="/_img/cont/student_join.png" alt="학생회원가입" /></a></p>
								<h5>코리아퀼트스쿨에서 다양한 교육을 즐기 실 수 있습니다.</h5>
								<p class="mt15"><a href="/member/join.php?mode=student">학생 회원가입</a></p><!--<a href="/member/join.php">-->
							</li>
							<li>
								<p class="c mb20"><img src="/_img/cont/teacher_join.png" alt="강사회원가입" /></a></p>
								<h5>코리아퀼트스쿨에서 많은 것을 알려 주실수 있습니다.</h5>
								<p class="mt15"><a href="/member/join.php?mode=teacher">강사 회원가입</a></p><!--<a href="/member/join.php">-->
							</li>
						</ul>
						
					</div>
			</div>
		</div>
		
	</body>
	<? include "../_inc/f_jsp.php"; ?>
</html>
