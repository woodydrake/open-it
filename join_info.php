<!doctype html>

<html>

	<head>
	<?  include "../_inc/title.php"; 
		$mode = $_REQUEST['mode'];
	?>
	<script src="../_js/jquery-1.4.1.min.js"></script>
	<script src="../_js/pop_layer.js"></script>
	<script src="../_js/common.js"></script>
	<script> 
		function check_input() {
			if(!document.member_form.name.value) {
				alert("이름을 입력하세요");
				return;
			} //이름 공백체크
			if(!document.member_form.id.value) {
				alert("아이디를 입력하세요");
				return;
			} //아이디 공백체크
			if(!document.member_form.pass.value) {
				alert("비밀번호를 입력하세요");
				return;
			} //비밀번호 공백체크
			if(!document.member_form.pass_confirm.value) {
				alert("동일한 비밀번호를 입력하세요");
				return;
			} //비번확인 공백체크
			if (document.member_form.pass.value != document.member_form.pass_confirm.value) {
				alert("비밀번호가 일치하지 않습니다.\n다시 입력해주세요.");  
				return;
			} //비밀번호 불일치 체크
			if(!document.member_form.eng_name.value) {
				alert("영문명을 입력하세요");
				return;
			} //영문명 공백체크
			if(!document.member_form.chi_name.value) {
				alert("한문명을 입력하세요");
				return;
			} //한문명 공백체크
			if(!document.member_form.email1.value) {
				alert("이메일주소를 입력하세요");
				return;
			} //이메일주소 공백체크
			if(!document.member_form.email2.value) {
				alert("이메일 도메인을 입력하세요");
				return;
			} //이메일 공백체크
			if (!document.member_form.phone1.value || !document.member_form.phone2.value || !document.member_form.phone3.value) {
				alert("휴대폰 번호를 입력하세요");    
				document.member_form.nick.focus();
				return;
			} //휴대번호 공백체크
			if(!document.member_form.birth.value) {
				alert("생년월일을 입력하세요");
				return;
			} //생년월일 공백체크
			if(!document.member_form.zipcode.value) {
				alert("우편번호를 입력하세요");
				return;
			} //우편번호 공백체크
			if(!document.member_form.address.value) {
				alert("기본주소를 입력하세요");
				return;
			} //기본구조 공백체크
			if(!document.member_form.address_sub.value) {
				alert("상세주소를 입력하세요");
				return;
			} //상세주소 공백체크
		
			document.member_form.submit();
		} //입력란 공백 및 불일치 체크
	</script>

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
							<li><a href="/member/join_sel.php">회원가입</a></li>
							<li><a href="#" class="here">회원정보입력</a></li>
						</ol>
					</div>
					<div class="s_cont">
						<h3>필수회원정보</h3>
						<h4>회원가입을 위한 필수 정보를 입력합니다</h4>
						<table class="join_form mt20">
							<form name="member_form" method="post" action="insert.php?mode=<?=$mode?>">
							<colgroup><col width="200px"><col width=""></colgroup>
							<tr>
								<th>이름</th>
								<td><input type="text" name="name"/></td>
							</tr>
							<tr>
								<th>아이디</th>
								<td class="over">
									<p class="f_l mr5"><input type="text" name="id" /></p> 
									<!-- 회원 조회
									<p class="f_l mr5"><a class="btn_id" href="#" ">회원조회</a></p>
									<span class="t_green">사용가능합니다.</span>
									<span class="t_red" style="display:none">이미 사용하고 있습니다.</span>
									-->
								</td>
							</tr>
							<tr>
								<th>비밀번호</th>
								<td><input type="password" name="pass"/> <span class="ml5 text">비밀번호는 띄어쓰기 없는 영문대소문자, 숫자, 특수문자 포함 8~20자 사용해야 합니다.</span></td>
							</tr>
							<tr>
								<th>비밀번호 확인</th>
								<td><input type="password" name="pass_confirm"/> <span class="ml5 text">비밀번호를 다시 한번 입력해주세요</span></td>
							</tr>
							<tr>
								<th>이름(영문명)</th>
								<td><input type="text" name="eng_name" /></td>
							</tr>
							<tr>
								<th>이름(한문명)</th>
								<td><input type="text" name="chi_name"/></td>
							</tr>
							<tr>
								<th>이메일주소</th>
								<td>	
									<div class="overflow">
										<p class="f_l mr5" style="display:inline-block"><input type="text" style="width:150px" name="email1" /> @ <input type="text" style="width:150px" name="email2"/></p>
										<!-- 이메일 선택 생략 
										<p class="f_l sel" style="width:160px;">
											<select style="width:160px;" name="email2" id="email2" >
												<option value="">이메일선택</option>
												<option value="naver.com">naver.com</option>
												<option value="gmail.com">gmail.com</option> 
												<option value="hanmail.net">hanmail.net</option> 
												<option value="daum.net">daum.net</option>
												<option value="hotmail.com">hotmail.com</option>
												<option value="nate.com">nate.com</option>
												<option value="paran.com">paran.com</option>
												<option value="yahoo.co.kr">yahoo.co.kr</option>
												<option value="dreamwiz.com">dreamwiz.com</option>
												<option value="empal.com">empal.com</option>
												<option value="hanmir.com">hanmir.com</option>
												<option value="hanafos.com">hanafos.com</option>
												<option value="lycos.co.kr">lycos.co.kr</option>
												<option value="freechal.com">freechal.com</option>
												<option value="1">직접입력</option>
											</select>						
											<span style="width:150px;">이메일선택</span>
										</p>
										-->
									</div>									
									<p class="mt5 text">유효한 이메일로 입력 바랍니다. 유효한 이메일이 아닐 경우, 회원서비스 이용에 제약이 될 수 있습니다.</p>
								</td>
							</tr>
							<tr>
								<th>이메일수신</th>
								<td>
									<div class="overflow">
										<p class="text_b f_l">이 메일 뉴스레터를 신청하시겠습니까?</p>										
										<p class="f_l ml20">
											<input type="radio" name="email_news" value="Y" checked=""><label for="ex1">&nbsp;예</label>
											<input type="radio" name="email_news" value="N" class="ml10"><label for="ex2">&nbsp;아니오</label>
										</p>
									</div>
									<p class="text">이메일 수신동의 하시면 메일을 통해, 여러가지 교육정보와 각종 이벤트 혜택을 받아보실 수 있습니다.</p>
								</td>
							</tr>
							<tr>
								<th>핸드폰</th>
								<td class="over">	
									<!-- 선택 생략 
									<p class="sel f_l mr5" style="width:100px">
										<select name="phone1" style="width:100px">
											<option value="010">010</option>
											 <option value="011">011</option>
											 <option value="017">017</option>
											 <option value="016">016</option>
											 <option value="017">018</option>
											 <option value="018">018</option>
											 <option value="019">019</option>
										</select>
										<span>010</span>								
									</p>
									-->
									<p class="f_l mr5" >
										<input type="text" style="width:100px" name="phone1" maxlength="4"> -
										<input type="text" style="width:100px" name="phone2" maxlength="4"> -
										<input type="text" style="width:100px" name="phone3" maxlength="4">
									</p>
									<p class="f_l">
										<!-- 연락처 조회 
										<a class="btn_id" href="#">연락처 조회</a>
										-->
									</p>
								</td>
							</tr>
							<tr>
								<th>SMS 수신</th>
								<td>
									<p class="text">이벤트와 주문 관련 정보를 SMS로 받아보시겠습니까?</p>
									<p>
										<input type="radio" name="sms" value="Y" checked=""><label for="ex1">&nbsp;예</label>
										<input type="radio" name="sms" value="N" class="ml20"><label for="ex2">&nbsp;아니오</label>
									</p>
								</td>
							</tr>
							<tr>
								<th>생년월일</th>
								<td class="over">
									<!-- 생년월일 입력식 교체
									<p class="sel f_l mr5" style="width:100px">
										<select name="phone1" style="width:100px">
											<option selected>연도</option>
											<option>2000</option>
											<option>1999</option>
											<option>1998</option>
											<option>1997</option>
											<option>1996</option>
											<option>1995</option>
											<option>1994</option>
											<option>1993</option>
											<option>1992</option>
											<option>1991</option>
											<option>1990</option>
										</select>
										<span>연도</span>
									</p>
									<p class="sel f_l mr5" style="width:100px">
										<select name="phone1" style="width:100px">									
											<option selected>월</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
											<option>10</option>
											<option>11</option>
											<option>12</option>		
										</select>
										<span>월</span>
									</p>

									<p class="sel f_l mr5" style="width:100px">
										<select name="phone1" style="width:100px">
											<option selected>일</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
										</select>
										<span>일</span>
									</p>
									-->
									<input style="width:120px"  name="birth" value="ex)19800101">
									<!-- 이미지 배너 생략
									<img src="/_img/cont/i_cal.png" alt="달력선택" title="달력선택" style="margin-left:5px; vertical-align:middle; cursor:pointer;">
									-->
								</td>
							</tr>
							<tr>
								<th>성별</th>
								<td><p>
											<input type="radio" name="gen" value="M" checked=""><label for="ex1">&nbsp;남성</label>
											<input type="radio" name="gen" value="F" class="ml20"><label for="ex2">&nbsp;여성</label>
										</p>
								</td>
							</tr>
							<tr>
								<th>주소</th>
								<td>
									<div>
										<p style="display:inline-block">
											<span class="mr10 text">우편번호 : </span>
											<input name="zipcode" value="">								
										</p>
										<p style="display:inline-block">
											<!-- 우편번호 찾기 생략
											<a class="btn_id" href="javascript:;" onclick="layer_open('layer1');return false;">찾기</a>
											-->
										</p>
									</div>

									<p class="mt5">
										<span class="mr10 text">기본주소 : </span>
										<input style="width:70%" name="address" value="">
									</p>
									<p class="mt5">
										<span class="mr10 text">상세주소 : </span>
										<input style="width:70%" name="address_sub" value="">
									  </p>
								</td>
							</tr>
							</form>
						</table>
				

						<p class="mt30 c"><a class="btn_gry" href="join_sel.php">취소</a> <a class="btn_red" onclick="check_input()">회원가입</a></p> 
				</div>
			</div>
		</div>
		
	</body>

</html>
<!--우편번호찾기 팝업-->
<div class="layer">
	<div class="bg"></div>
	<div id="layer1" class="pop-layer">
		<div class="pop_top">
			<h2>우편번호찾기</h2>
			<p class="close"><a href="#" class="cbtn"><img width="18px" src="../_img/cont/pop_close.png" alt="닫기"/></a></p>
		</div>
		<div class="pop_cont">
			여기에 우편번호찾기 화면을 띄워주세요
			<!---다음우편번호서비스 http://postcode.map.daum.net/guide-->
		</div>
	</div>		
</div>
<!--//우편번호찾기 팝업끝-->


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
<? include "../_inc/f_jsp.php"; ?>