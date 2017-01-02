<!doctype html>

<html>

	<head>
	<? include "../_inc/title.php"; ?>
	<!--체크사항 확인(지욱)-->
	<script type="text/javascript">
	var getParameter = function (param) {
    var returnValue;
    var url = location.href;
    var parameters = (url.slice(url.indexOf('?') + 1, url.length)).split('&');
    for (var i = 0; i < parameters.length; i++) {
        var varName = parameters[i].split('=')[0];
        if (varName.toUpperCase() == param.toUpperCase()) {
            returnValue = parameters[i].split('=')[1];
            return decodeURIComponent(returnValue);
        }
    }
};
		function agree_check(){
			if(!$("input[name=agree1]").is(":checked")){
				alert('이용약관에 동의 해 주세요');
				$("input[name=agree1]").focus();	
				return ;
			}else if(!$("input[name=agree2]").is(":checked")){
				alert('개인정보 취급방침에 대해 동의 해 주세요');
				$("input[name=agree2]").focus();	
				return ;
			}
			if(getParameter('mode') == "student"){
				location.href="./join_info.php?mode=student"
			}else{
				location.href="./join_info.php?mode=teacher"
			}
		};
	</script>
	<!--체크사항 확인(지욱)끝-->
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
							<li><a href="/member/join_sel.php">회원가입</a></li><!--<a href="#">-->
							<li><a href="/member/join.php" class="here">약관동의</a></li><!--<a href="#">-->
						</ol>
					</div>

					<div class="s_cont">
						<h3>코리아퀼트스쿨 이용약관</h3>
						<p class="mt10">
							<textarea class="terms" style="height:200px">
코리아퀼트스쿨이용약관

제1조(목적)
이 약관은 코리아퀼트스쿨 사이버 몰(이하 "몰"이라 한다)에서 제공하는 인터넷 관련 서비스(이하 "서비스"라 한다)를 이용함에 있어 사이버몰과 이용자의 권리ㆍ의무 및 책임사항을 규정함을 목적으로합니다.

제2조(정의)
1. "몰" 이란 코리아퀼트스쿨이 서비스 또는 용역을 이용자에게 제공하기 위하여 컴퓨터 등 정보통신설비를 이용하여 재화 또는 용역을 거래할 수 있도록 설정한 인터넷상의 영업장을 말하며, 아울러사이버몰을 운영하는 사업자의 의미로도 사용합니다. 
2. "이용자"란 "몰"에 접속하여 이 약관에 따라 "몰"이 제공하는 서비스를 받는 회원 및 비회원을말합니다. 
3. '회원'이라 함은 "몰"에 개인정보를 제공하여 회원등록을 한 자로서, "몰"의 정보를 지속적으로제공받으며, "몰"이 제공하는 서비스를 계속적으로 이용할 수 있는 자를 말합니다. 
4. '비회원'이라 함은 회원에 가입하지 않고 "몰"이 제공하는 서비스를 이용하는 자를 말합니다.

제3조 (약관의 명시와 개정)
1. "몰"은 이 약관의 내용과 상호, 영업소 소재지, 대표자의 성명, 사업자등록번호, 연락처(전화,팩스, 전자우편 주소 등) 등을 이용자가 알 수 있도록 코리아퀼트스쿨 사이버 몰의 초기 서비스 화면(전면)에 게시합니다. 
2. "몰"은 약관의 규제 등에 관한 법률, 전자거래기본법, 전자서명법, 정보통신망 이용촉진 등에관한 법률, 소비자보호법 등 관련법을 위배하지 않는 범위에서 이 약관을 개정할 수 있습니다. 
3. "몰"이 약관을 개정할 경우에는 적용일자 및 개정사유를 명시하여 현행약관과 함께 몰의 초기화면에 그 적용일자 7일 이전부터 적용일자 전일까지 공지합니다. 
4. "몰"이 약관을 개정할 경우에는 그 개정약관은 그 적용일자 이후에 체결되는 계약에만 적용되고그 이전에 이미 체결된 계약에 대해서는 개정전의 약관조항이 그대로 적용됩니다. 다만 이미 계약을체결한 이용자가 개정약관 조항의 적용을 받기를 원하는 뜻을 제3항에 의한 개정약관의 공지기간 내에'몰"에 송신하여 "몰"의 동의를 받은 경우에는 개정약관 조항이 적용됩니다. 
5. 이 약관에서 정하지 아니한 사항과 이 약관의 해석에 관하여는 정부가 제정한 전자거래소비자보호
지침 및 관계법령 또는 상관례에 따릅니다.

제4조(서비스의 제공 및 변경)
1. "몰"은 다음과 같은 업무를 수행합니다. 
① 회원 및 비회원에 대한 서비스 또는 용역에 대한 정보 제공 및 교과서 및 교부자재 구매 계약의체결 
② 교과서 및 교부자재 구매 계약이 체결된 서비스 또는 물품의 배송 
③ 기타 "몰"이 정하는 업무 
2. "몰"은 서비스 및 기술적 사양의 변경 등의 경우에는 장차 체결되는 계약에 의해 제공할 서비스ㆍ 교과서 및 교부자재 구매 계약 체결의 내용을 변경할 수 있습니다. 이 경우에는 변경된서비스ㆍ 교과서 및 교부자재 구매 계약 체결의 내용 및 제공일자를 명시하여 현재의 서비스ㆍ 교과서및 교부자재 구매 계약 체결의 의 내용을 게시한 곳에 그 제공 일자 이전 7일부터 공지합니다. 
3. "몰"이 제공하기로 이용자와 계약을 체결한 서비스의 내용을 서비스의 변경 및 기술적 사양의 변경등의 사유로 변경할 경우에는 "몰"은 이로 인하여 이용자가 입은 손해를 배상합니다. 단, "몰"에 고의 또는 과실이 없는 경우에는 그러하지 아니합니다.

제5조(서비스의 중단)
1 ."몰"은 컴퓨터 등 정보통신설비의 보수점검ㆍ교체 및 고장, 통신의 두절 등의 사유가 발생한경우에는 서비스의 제공을 일시적으로 중단할 수 있습니다. 
2. 제1항에 의한 서비스 중단의 경우에는 "몰"은 제8조에 정한 방법으로 이용자에게 통지합니다. 
3 ."몰"은 제1항의 사유로 서비스의 제공이 일시적으로 중단됨으로 인하여 이용자 또는 제 3자가 입은손해에 대하여 배상합니다. 단 "몰"에 고의 또는 과실이 없는 경우에는 그러하지 아니합니다.

제6조(회원가입)
1. 이용자는 "몰"이 정한 가입 양식에 따라 회원정보를 기입한 후 이 약관에 동의한다는 의사표시를함으로서 회원가입을 신청합니다. 
2."몰"은 제1항과 같이 회원으로 가입할 것을 신청한 이용자 중 다음 각호에 해당하지 않는 한회원으로 등록합니다. 
(1) 가입신청자가 이 약관 제7조제3항에 의하여 이전에 회원자격을 상실한 적이 있는 경우,다만 제7조제3항에 의한 회원자격 상실 후 3년이 경과한 자로서 "몰"의 회원재가입승낙을 얻은 경우에는 예외로 한다. 
(2) 등록 내용에 허위, 기재누락, 오기가 있는 경우 
(3) 기타 회원으로 등록하는 것이 "몰"의 기술상 현저히 지장이 있다고 판단되는 경우
3. 회원가입계약의 성립시기는 "몰"의 승낙이 회원에게 도달한 시점으로 합니다. 
4. 회원은 제15조제1항에 의한 등록사항에 변경이 있는 경우, 즉시 전자우편 기타 방법으로 "몰"에대하여 그 변경사항을 알려야 합니다.

제7조(회원 탈퇴 및 자격 상실 등)
1. 회원은 "몰"에 언제든지 탈퇴를 요청할 수 있으며 "몰"은 즉시 회원 탈퇴를 처리합니다. 
2. 회원이 다음 각호의 사유에 해당하는 경우, "몰"은 회원자격을 제한 및 정지시킬 수 있습니다. 
(1) 가입 신청시에 허위 내용을 등록한 경우 
(2) "몰"을 이용하여 구입한 서비스ㆍ교과서 및 교부자재 등의 대금, 기타 "몰"이용에 관련하여회원이 부담하는 채무를 기일에 지급하지 않는 경우 
(3) 다른 사람의 "몰" 이용을 방해하거나 그 정보를 도용하는 등 전자거래질서를 위협하는 경우 
(4)  "몰"을 이용하여 법령과 이 약관이 금지하거나 공서양속에 반하는 행위를 하는 경우 
3.  "몰"이 회원 자격을 제한ㆍ정지 시킨 후, 동일한 행위가 2회 이상 반복되거나 30일 이내에 그 사
유가 시정되지 아니하는 경우 "몰"은 회원자격을 박탈할 수 있습니다. 
4. "몰"이 회원자격을 박탈하는 경우에는 회원등록을 말소합니다. 이 경우 회원에게 이를 통지하고,
회원등록 말소 전에 소명할 기회를 부여합니다.

제8조(회원에 대한 통지)
1 ."몰"이 회원에 대한 통지를 하는 경우, 회원이 "몰"에 제출한 전자우편 주소로 할 수 있습니다. 
2. "몰"은 불특정다수 회원에 대한 통지의 경우 1주일이상 "몰" 뉴스란에 게시함으로서 개별 통지에대신할 수 있습니다.

제9조(서비스 이용ㆍ교과서 및 교부자재 구매신청)
"몰"이용자는 "몰"상에서 이하의 방법에 의하여 구매를 신청합니다.
1. 성명, 주소, 전화번호 입력 
2. 서비스 또는 세미나 수강, 교과서 및 교부자재의 선택 
3. 결제방법의 선택 
4. 이 약관에 동의한다는 표시(예, 마우스 클릭)

제10조 (계약의 성립)
1. "몰"은 제9조와 같은 구매신청에 대하여 다음 각호에 해당하지 않는 한 승낙합니다. 
(1) 신청 내용에 허위, 기재누락, 오기가 있는 경우.
2. 대금결제를 "몰"이 정하는 바에 따르지 않는 경우
3. 기타 구매신청에 승낙하는 것이 "몰" 기술상 현저히 지장이 있다고 판단하는 경우
4. "몰"의 승낙이 제12조제1항의 수신확인통지형태로 이용자에게 도달한 시점에 계약이 성립한 것
으로 봅니다.

제11조(지급방법)
"몰"에서 구매한 서비스 또는 수강, 교과서 및 교부자재에 대한 대금지급방법은 다음 각호의 하나로할 수 있습니다.
1. 계좌이체 
2. 신용카드결제 
3. 온라인무통장입금 
4. 전자화폐에 의한 결제 
5. 코리아퀼트스쿨이 승인한 고객에 한해 어음결제 가능 등

제12조(수신 확인통지ㆍ서비스 또는 수강, 교과서 및 교부자재의 구매신청 변경 및 취소)
1. "몰"은 이용자의 구매신청이 있는 경우 이용자에게 수신확인통지를 합니다. 
2. 수신 확인통지를 받은 이용자는 의사표시의 불일치 등이 있는 경우에는 수신확인통지를 받은 후 즉
시 수강, 교과서 및 교부자재의 구매신청 변경 및 취소를 요청할 수 있습니다. 
3. "몰"은 수강개시 전 및 배송 전에 수강, 교과서 및 교부자재의 구매신청 변경 및 취소 요청이 있는때에는 지체 없이 그 요청에 따라 처리합니다.

제13조(배송)
"몰"은 이용자가 구매한 재화에 대해 배송수단, 수단별 배송비용 부담자, 수단별 배송기간 등을명시합니다. 만약 "몰"의 고의ㆍ과실로 약정 배송기간을 초과한 경우에는 그로 인한 이용자의손해를 배상합니다.

제14조(취소 및 환불)
1. "몰"은 이용자가 세미나 수강료 또는 교과서 및 교부자재의 취소에 관하여 대금을 받은 경우에는대금을 받은 날부터 7일 이내에, 그렇지 않은 경우에는 그 사유발생일로부터 7일 이내에 취소 및환불절차를 취합니다. 
(1) 다음 각호의 경우에는 "몰"은 접수된 세미나 수강료 및 교과서 및 교부자재의 취소에 대해서는다음영업일 7일 이내에 이용자의 요구에 따라 환불 및 취소조치를 합니다. 다만 그 요구기한은 취소된날로부터 20일 이내로 합니다. 
1) 접수되거나 결정된 수강내용 및 교과서 및 교부자재의 대금이 수강안내 및 교과서 및 교부자재안내내용과 상이하거나 "몰"이 제공한 정보와 상이할 경우 
2) 수강료를 입금하고 교과서 및 교부자재 비용을 입금한 후에도 지정한 날자에 강의가 개시되지않았을 경우, 코리아퀼트스쿨의 중재에 의해서도 중재가 안된 경우 
3) 방문판매 등에 관한 법률 제18조에 의하여 광고에 표시하여야 할 사항을 표시하지 아니한 상태에서이용자의 청약이 이루어진 경우

제15조(개인정보보호)
1. "몰"은 이용자의 정보수집시 수강신청 및 교과서 및 교부자재 접수에 필요한 최소한의 정보를수집합니다. 다음 사항을 필수사항으로 하며 그 외 사항은 선택사항으로 합니다. 
(1) 성명 
(2) 생년월일
(3) 주소 
(4) 전화번호 
(5) 희망ID(회원의 경우) 
(6) 비밀번호(회원의 경우)
(7) 직업
(8) 경력
2. "몰"이 이용자의 개인식별이 가능한 개인정보를 수집하는 때에는 반드시 당해 이용자의 동의를받습니다. 
3. 제공된 개인정보는 당해 이용자의 동의 없이 목적 외의 이용이나 제3자에게 제공할 수 없으며,이에 대한 모든 책임은 "몰"이 집니다. 다만, 다음의 경우에는 예외로 합니다. 
(1) 배송업무상 배송업체에게 배송에 필요한 최소한의 이용자의 정보(성명, 주소, 전화번호)를알려주는 경우 
(2) 통계작성, 학술연구 또는 시장조사를 위하여 필요한 경우로서 특정 개인을 식별할 수 없는 형태
로 제공하는 경우
4. "몰"이 제2항과 제3항에 의해 이용자의 동의를 받아야 하는 경우에는 개인정보관리 책임자의신원(소속, 성명 및 전화번호 기타 연락처), 정보의 수집목적 및 이용목적, 제3자에 대한 정보제공관련사항(제공 받는 자, 제공목적 및 제공할 정보의 내용)등 정보통신망이용 촉진 등에 관한 법률제 16조 제3항이 규정한 사항을 미리 명시하거나 고지해야 하며 이용자는 언제든지 이 동의를철회할 수 있습니다. 
5. 이용자는 언제든지 "몰"이 가지고 있는 자신의 개인정보에 대해 열람 및 오류정정을 요구할 수있으며 "몰"은 이에 대해 지체 없이 필요한 조 치를 취할 의무를 집니다. 이용자가 오류의 정정을요구한 경우에는 "몰"은 그 오류를 정정할 때까지 당해 개인정보를 이용하지 않습니다. 
6. "몰"은 개인정보 보호를 위하여 관리자를 한정하여 그 수를 최소화하며 신용카드, 은행계좌 등을포함한 이용자의 개인정보의 분실, 도난, 유출, 변조 등으로 인한 이용자의 손해에 대하여모든 책임을집니다. 
7. "몰" 또는 그로부터 개인정보를 제공 받은 제3자는 개인정보의 수집목적 또는 제공받은 목적을달성한 때에는 당해 개인정보를 지체 없이 파기합니다.

제16조("몰"의 의무)
1. "몰은 법령과 이 약관이 금지하거나 공서양속에 반하는 행위를 하지 않으며 이 약관이 정하는 바에따라 지속적이고, 안정적으로 서비스를 제공하는 데 최선을 다하여야 합니다. 
2. "몰"은 이용자가 안전하게 인터넷 서비스를 이용할 수 있도록 이용자의 개인정보(신용정보 포함)보호를 위한 보안 시스템을 갖추어야 합니다. 
3.  "몰"은 이용자가 원하지 않는 영리목적의 광고성 전자우편을 발송하지 않습니다.

제17조( 회원의 ID 및 비밀번호에 대한 의무)
1. 제15조의 경우를 제외한 ID와 비밀번호에 관한 관리책임은 회원에게 있습니다. 
2. 회원은 자신의 ID 및 비밀번호를 제3자에게 이용하게 해서는 안됩니다. 
3. 회원이 자신의 ID 및 비밀번호를 도난 당하거나 제3자가 사용하고 있음을 인지한 경우에는바로 "몰"에 통보하고 "몰"의 안내가 있는 경우에는 그에 따라야 합니다.

제18조(이용자의 의무)
이용자는 다음 행위를 하여서는 안됩니다.
(1) 신청 또는 변경시 허위내용의 등록 
(2) "몰"에 게시된 정보의 변경 
(3) "몰"이 정한 정보 이외의 정보(컴퓨터 프로그램 등)의 송신 또는 게시 
(4) "몰" 기타 제3자의 저작권 등 지적재산권에 대한 침해 
(5) "몰" 기타 제3자의 명예를 손상시키거나 업무를 방해하는 행위 
(6) 외설 또는 폭력적인 메시지ㆍ화상ㆍ음성 기타 공서양속에 반하는 정보를 몰에 공개 또는게시하는행위

제19조(연결"몰"과 피연결"몰" 간의 관계)
1. 상위 "몰"과 하위 "몰"이 하이퍼 링크(예: 하이퍼 링크의 대상에는 문자, 그림 및 동화상 등이포함됨)방식 등으로 연결된 경우, 전자를 연결 "몰"(웹 사이트)이라고 하고 후자를 피연결 "몰"(웹사이트)이라고 합니다. 
2. 연결 "몰"은 피연결 "몰"이 독자적으로 제공하는 재화ㆍ용역에 의하여 이용자와 행하는 거래에대해서 보증책임을지지 않는다는 뜻을 연결 "몰"의 사이트에서 명시한 경우에는 그 거래에 대한보증책임을 지지 않습니다.

제20조(저작권의 귀속 및 이용제한)
1. "몰"이 작성한 저작물에 대한 저작권 기타 지적재산권은 "몰"에 귀속합니다. 
2. 이용자는 "몰"을 이용함으로써 얻은 정보를 "몰"의 사전 승낙 없이 복제, 송신, 출판, 배포,방송 기타 방법에 의하여 영리목적으로 이용하거나 제3자에게 이용하게 하여서는 안됩니다.

제21조(분쟁해결)
1. "몰"은 이용자가 제기하는 정당한 의견이나 불만을 반영하고 그 피해를 보상처리하기 위하여피해보상처리기구를 설치ㆍ운영합니다. 
2. "몰"은 이용자로부터 제출되는 불만사항 및 의견은 우선적으로 그 사항을 처리합니다. 다만,신속한 처리가 곤란한 경우에는 이용자에게 그 사유와 처리일정을 즉시 통보해 드립니다. 
3. "몰"과 이용자간에 발생한 분쟁은 전자거래기본법 제28조 및 동 시행령 제15조에 의하여 설치된전자거래분쟁조정위원회의 조정에 따를 수 있습니다.

제22조(재판권 및 준거법)
1. "몰"과 이용자간에 발생한 전자거래 분쟁에 관한 소송은 민사소송법상의 관할법원에 제기합니다. 
2. "몰"과 이용자간에 제기된 전자거래 소송에는 한국법을 적용합니다.
※코리아퀼트스쿨 쇼핑몰은 공정거래위원회에서 심의한 표준약관을 사용하고 있음.
</textarea>
						</p>
						<form name="joinFrm" id="joinFrm" action=""><!--체크박스 생성(지욱)-->
						<p class="checks"><input type="checkbox" name="agree1" id="join" style="vertical-align:-2px; margin-top:10px; margin-left:5px;"> <label for="join">이용약관에 동의합니다.</label></p><!--<input type="checkbox" name="checks" id="join" style="vertical-align:-2px; margin-top:10px; margin-left:5px;">-->

						<h3 class="mt30">개인정보취급방침</h3>				
						<p class="mt10">
						<textarea class="terms" style="height:200px">
개인정보 취급방침
'코리아퀼트스쿨'은 (이하 '회사'는) 
고객님의 개인정보를 중요시하며, "정보통신망 이용촉진 및 정보보호"에 관한 법률을 준수하고있습니다.

회사는 개인정보취급방침을 통하여 고객님께서 제공하시는 개인정보가 어떠한 용도와 방식으로이용되고 있으며, 개인정보보호를 위해 어떠한 조치가 취해지고 있는지 알려드립니다.

회사는 개인정보취급방침을 개정하는 경우 웹사이트 공지사항(또는 개별공지)을 통하여 공지할것입니다.
ο 본 방침은 : 2008 년 09 월 20 일 부터 시행됩니다. 

■ 수집하는 개인정보 항목

회사는 회원가입, 상담, 서비스 신청 등등을 위해 아래와 같은 개인정보를 수집하고 있습니다.
ο 수집항목 : 이름 , 로그인ID , 비밀번호 , 자택 전화번호 , 자택 주소 , 휴대전화번호 , 이메일 , 주민등록번호
ο 개인정보 수집방법 : 홈페이지(회원가입) 

■ 개인정보의 수집 및 이용목적

회사는 수집한 개인정보를 다음의 목적을 위해 활용합니다..
ο 서비스 제공에 관한 계약 이행 및 서비스 제공에 따른 요금정산
구매 및 요금 결제 , 물품배송 또는 청구지 등 발송
ο 회원 관리
회원제 서비스 이용에 따른 본인확인 , 개인 식별 , 불만처리 등 민원처리 , 고지사항 전달
ο 마케팅 및 광고에 활용
이벤트 등 광고성 정보 전달

■ 개인정보의 보유 및 이용기간

원칙적으로, 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체 없이 파기합니다.단, 관계법령의 규정에 의하여 보존할 필요가 있는 경우 회사는 아래와 같이 관계법령에서 정한 일정한 기간 동안 회원정보를 보관합니다.
보존 항목 : 이름 , 로그인ID , 비밀번호 , 자택 전화번호 , 자택 주소 , 휴대전화번호 , 이메일 , 주민등록번호
보존 근거 : 전자상거래등에서의 소비자보호에 관한 법률
보존 기간 : 5년

■ 개인정보의 파기절차 및 방법

회사는 원칙적으로 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체없이 파기합니다. 파기절차 및 방법은 다음과 같습니다.
ο 파기절차
회원님이 회원가입 등을 위해 입력하신 정보는 목적이 달성된 후 별도의 DB로 옮겨져(종이의 경우 별도의 서류함) 내부 방침 및 기타 관련 법령에 의한 정보보호 사유에 따라(보유 및 이용기간 참조) 일정 기간 저장된 후 파기됩니다. 
별도 DB로 옮겨진 개인정보는 법률에 의한 경우가 아니고서는 보유 이외의 다른 목적으로 이용되지 않습니다. 

ο 파기방법 
- 전자적 파일형태로 저장된 개인정보는 기록을 재생할 수 없는 기술적 방법을 사용하여 삭제합니다. 

■ 개인정보 제공

회사는 이용자의 개인정보를 원칙적으로 외부에 제공하지 않습니다. 다만, 아래의 경우에는 예외로 합니다.
- 이용자들이 사전에 동의한 경우
- 법령의 규정에 의거하거나, 수사 목적으로 법령에 정해진 절차와 방법에 따라 수사기관의 요구가 있는 경우

■ 수집한 개인정보의 위탁

회사는 고객님의 동의없이 고객님의 정보를 외부 업체에 위탁하지 않습니다. 향후 그러한 필요가 생길 경우, 위탁 대상자와 위탁 업무 내용에 대해 고객님에게 통지하고 필요한 경우 사전 동의를 받도록 하겠습니다.

■ 이용자 및 법정대리인의 권리와 그 행사방법

이용자 및 법정 대리인은 언제든지 등록되어 있는 자신 혹은 당해 만 14세 미만 아동의 개인정보를 조회하거나 수정할 수 있으며 가입해지를 요청할 수도 있습니다. 
이용자 혹은 만 14세 미만 아동의 개인정보 조회?수정을 위해서는 ‘개인정보변 경’(또는‘회원정보수정’ 등)을 가입해지(동의철회)를 위해서는 “회원탈퇴”를 클릭 하여 본인 확인 절차를거치신 후 직접 열람, 정정 또는 탈퇴가 가능합니다. 혹은 개인정보관리책임자에게 서면, 전화 또는이메일로 연락하시면 지체없이 조 치하겠습니다. 
귀하가 개인정보의 오류에 대한 정정을 요청하신 경우에는 정정을 완료하기 전까 지 당해 개인정보를이용 또는 제공하지 않습니다. 또한 잘못된 개인정보를 제3자 에게 이미 제공한 경우에는 정정처리결과를 제3자에게 지체없이 통지하여 정정이 이루어지도록 하겠습니다. 
oo는 이용자 혹은 법정 대리인의 요청에 의해 해지 또는 삭제된 개인정보는 “oo 가 수집하는개인정보의 보유 및 이용기간”에 명시된 바에 따라 처리하고 그 외의 용도로 열람 또는 이용할 수없도록 처리하고 있습니다.

■ 개인정보 자동수집 장치의 설치, 운영 및 그 거부에 관한 사항

회사는 귀하의 정보를 수시로 저장하고 찾아내는 ‘쿠키(cookie)’ 등을 운용합니다. 쿠키란 oo의 웹사이트를 운영하는데 이용되는 서버가 귀하의 브라우저에 보내는 아주 작은 텍스트 파일로서 귀하의컴퓨터 하드디스크에 저장됩니다. 회사은(는) 다음과 같은 목적을 위해 쿠키를 사용합니다. 
▶ 쿠키 등 사용 목적 
- 회원과 비회원의 접속 빈도나 방문 시간 등을 분석, 이용자의 취향과 관심분야를 파악 및 자취 추적, 각종 이벤트 참여 정도 및 방문 회수 파악 등을 통한 타겟 마케팅 및 개인 맞춤 서비스제공 
귀하는 쿠키 설치에 대한 선택권을 가지고 있습니다. 따라서, 귀하는 웹브라우저에서 옵션을설정함으로써 모든 쿠키를 허용하거나, 쿠키가 저장될 때마다 확인을 거치거나, 아니면 모든 쿠키의저장을 거부할 수도 있습니다. 
▶ 쿠키 설정 거부 방법 
예: 쿠키 설정을 거부하는 방법으로는 회원님이 사용하시는 웹 브라우저의 옵션을 선택함으로써모든 쿠키를 허용하거나 쿠키를 저장할 때마다 확인을 거치거나, 모든 쿠키의 저장을 거부할 수있습니다. 
설정방법 예(인터넷 익스플로어의 경우) 
: 웹 브라우저 상단의 도구 &gt; 인터넷 옵션 &gt; 개인정보 
단, 귀하께서 쿠키 설치를 거부하였을 경우 서비스 제공에 어려움이 있을 수 있습니다.

■ 개인정보에 관한 민원서비스

회사는 고객의 개인정보를 보호하고 개인정보와 관련한 불만을 처리하기 위하여 아래와 같이 관련 부서및 개인정보관리책임자를 지정하고 있습니다.. 
고객서비스담당 부서 : 온라인사업부
전화번호 : 1544-1540
이메일 : webmaster@enjoyquilt.co.kr
개인정보관리책임자 성명 : 홍성표
전화번호 : 02-3087-8788
이메일 : webmaster@enjoyquilt.co.kr
귀하께서는 회사의 서비스를 이용하시며 발생하는 모든 개인정보보호 관련 민원을 개인정보관리책임자혹은 담당부서로 신고하실 수 있습니다. 회사는 이용자들의 신고사항에 대해 신속하게 충분한 답변을드릴 것입니다. 
기타 개인정보침해에 대한 신고나 상담이 필요하신 경우에는 아래 기관에 문의하시기 바랍니다. 
1.개인분쟁조정위원회 (www.1336.or.kr/1336) 
2.정보보호마크인증위원회 (www.eprivacy.or.kr/02-580-0533~4) 
3.대검찰청 인터넷범죄수사센터 (http://icic.sppo.go.kr/02-3480-3600) 
4.경찰청 사이버테러대응센터 (www.ctrc.go.kr/02-392-0330)
</textarea>
					</p>
					<p class="checks"><input type="checkbox" name="agree2" id="info" style="vertical-align:-2px; margin-top:10px; margin-left:5px;"> <label for="info">개인정보 취급방침에 동의합니다.</label>
					</p><!--<input type="checkbox" name="checks" id="info" style="vertical-align:-2px; margin-top:10px; margin-left:5px;">-->					

					<!--체크박스 생성(지욱)-->	

					<p class="mt30 c"><a class="btn_gry" href="/member/join_sel.php">동의하지않습니다</a><!--<a class="btn_gry" href="#">--> <a class="btn_red" onclick="javascript:agree_check();">동의</a></p><!--<a class="btn_red" href="join_info.php">--> 

					</div>
			</div>
		</div>
		
	</body>
	<? include "../_inc/f_jsp.php"; ?>
</html>
