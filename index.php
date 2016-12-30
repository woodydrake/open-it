<?session_start();?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

	<head>
	<?include "_inc/title.php"; ?>
	</head>

	<body>

		<div id="wrap">		

			<? include "_inc/fix_left.php"; ?>

			<? include "_inc/q_menu.php"; ?>

			<div class="v_cont">
				<div class="over_tit">
					<h3>공지사항</h3>
					<p><a href="#" class="more_btn">더보기 +</a></p>
				</div>
				<ul class="notice">
					<li onclick="location.href='#'">
						<p class="tit">코리아퀼트에서 알려드립니다. 다양한 자격증을 보유하고 계신다면</p>
						<p class="date">16.06.11.</p>
					</li>
					<li onclick="location.href='#'">
						<p class="tit">[공지] 새로운 강의에 대해 알려드립니다.</p>
						<p class="date">16.06.05.</p>
					</li>
					<li onclick="location.href='#'">
						<p class="tit">다양한 퀼트를 보여드리고 싶습니다. 많은 분들의 참여 부탁드립니다.</p>
						<p class="date">16.06.02.</p>
					</li>
				</ul>

				<div class="over_tit mt30">
					<h3>자료실</h3>
					<p><a href="#" class="more_btn">더보기 +</a></p>
				</div>
				<ul class="data_list">
					<li onclick="location.href='#'"><img src="_img/main/data01.jpg" alt="" /></li>
					<li onclick="location.href='#'"><img src="_img/main/data02.jpg" alt="" /></li>
					<li onclick="location.href='#'"><img src="_img/main/data01.jpg" alt="" /></li>
					<li onclick="location.href='#'"><img src="_img/main/data02.jpg" alt="" /></li>
				</ul>
				
			</div>
			
			<div id="contents">
				<div class="visual">
					<!--돌아가는 배너-->
					<ul class="v_banner">
						<li><img src="/_img/main/no_bg.png" alt="" style="background-image:url(/_img/main/visual01.jpg);" /></li>
					</ul>
				</div>


				<div class="cont" >
					<!--닫기를 누르면 오른쪽 콘텐츠 들이 숨겨진후 열기를 누르면 다 시열린다.width:1300px; 이하일때는 자동적으로 숨겨진다 <p class="close_btn"><a href="#">열</br>기</a></p>-->
					<p class="close_btn"><a href="#">닫</br>기</a></p>

					<div class="edu_find">
						<p class="tit">원하는 교육을 찾아보세요</p>
						<div class="wrap_sel">
							<div class="sel">
								<div id="container">
									<select style="width:313px;" class="select-nomal" tabindex="9">
										<option selected>교육분류</option>
										<option>KQM 정규과정</option>
										<option>JLL 정규과정</option>
										<option>DIY 과정</option>
										<option>초청 특별 강좌</option>
									</select>
								</div>

								<div id="container" style="margin:5px 0 0 0 ;">
									<select style="width:313px;" class="select-nomal" tabindex="9">
										<option selected>교육과정보기</option>
										<option>[강사자격인증]</option>
										<option>[강사자격인증]</option>
									</select>
								</div>
							</div>
							<p class="find_edu"><a href="#" class="find_edu_btn"><img src="/_img/main/find_edu.png" alt="교육조회"  /><br/>교육조회</a></p>
						
						</div>
					</div>

					<div class="edu_list">
						<div class="over_tit">
							<h3>교육과정안내</h3>
							<p><a href="#" class="more_btn">더보기 +</a></p>
						</div>

						<!--4개가 보여지는 리스트-->
						<ul class="e_list">
							<li onclick="location.href='#'">
								<p class="text"><span>KQM 정규과정</span>[강사자격인증] 다양한 정규과정의 간략하게 소개해드립니다 소개해드립니다.</p>
								<p class="date">16.06.05 - 16.06.20.</p>
							</li>
							<li onclick="location.href='#'">
								<p class="text"><span>JLL 정규과정</span>[강사자격인증] 머신퀼트 강사인증을 받을 수 있는 강좌입니다. </p>
								<p class="date">16.06.05 - 16.06.20.</p>
							</li>
							<li onclick="location.href='#'">
								<p class="text"><span>DIY 과정</span>실생활에서 사용하 실 수 있는 가방 만들기.</p>
								<p class="date">16.06.05 - 16.06.20.</p>
							</li>
							<li onclick="location.href='#'">
								<p class="text"><span>초청 특별 강좌</span>퀼트계의 명장과 함께하는 방석만들기.</p>
								<p class="date">16.06.05 - 16.06.20.</p>
							</li>
						</ul>
					</div>

					<div class="best_shop">
						<h3>이달의 우수샵</h3>
						<ul class="shop_list">
							<li onclick="location.href='#'">
								<p class="img"><img src="_img/main/shop_img01.jpg" alt="" /></p>
								<p class="tit">코리아퀼트 스쿨 대전퀼트샵</p>
								<p class="phone">042)639-2778</p>
							</li>
							<li onclick="location.href='#'">
								<p class="img"><img src="_img/main/shop_img02.jpg" alt="" /></p>
								<p class="tit">코리아퀼트 스쿨 대전퀼트샵</p>
								<p class="phone">042)639-2778</p>
							</li>
						</ul>
					</div>

					<div class="site_banner">
						<!--4개이상 배너가 등록될시 버튼누르면 옆으로 이동-->
						<p class="next_btn"><a href="#"><img src="_img/main/next_btn.png" alt="옆으로"/></a></p>
						<ul class="s_banner">
							<li><a href="#"><img src="_img/main/s_banner01.jpg" alt="엔조이퀼트"/></a></li>
							<li><a href="#"><img src="_img/main/s_banner02.jpg" alt="워크넷"/></a></li>
							<li><a href="#"><img src="_img/main/s_banner03.jpg" alt="hrd"/></a></li>
							<li><a href="#"><img src="_img/main/s_banner04.jpg" alt="자노메"/></a></li>
						</ul>
					</div>
				</div>

				
			</div>

		</div>
		
	</body>

	<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="/_js/chosen.jquery.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(".select-nomal").chosen({
			allow_single_deselect:true, disable_search_threshold:10, no_results_text:'Oops, nothing found!'
		});		

	</script>
	<script language="javascript"> 

	function OpenWindow(url,intWidth,intHeight) { 
		   window.open(url, "_blank", "width="+intWidth+",height="+intHeight+",resizable=1,scrollbars=1") ; 
	 } 
	</script>

	

<!--왼쪽 메뉴 영역 길이 자동 조절-->
<script type="text/javascript">xtheight();</script>
<!--//왼쪽 메뉴 영역 길이 자동 조절-->

</html>
