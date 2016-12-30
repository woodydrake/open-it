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
				alert("�̸��� �Է��ϼ���");
				return;
			} //�̸� ����üũ
			if(!document.member_form.id.value) {
				alert("���̵� �Է��ϼ���");
				return;
			} //���̵� ����üũ
			if(!document.member_form.pass.value) {
				alert("��й�ȣ�� �Է��ϼ���");
				return;
			} //��й�ȣ ����üũ
			if(!document.member_form.pass_confirm.value) {
				alert("������ ��й�ȣ�� �Է��ϼ���");
				return;
			} //���Ȯ�� ����üũ
			if (document.member_form.pass.value != document.member_form.pass_confirm.value) {
				alert("��й�ȣ�� ��ġ���� �ʽ��ϴ�.\n�ٽ� �Է����ּ���.");  
				return;
			} //��й�ȣ ����ġ üũ
			if(!document.member_form.eng_name.value) {
				alert("�������� �Է��ϼ���");
				return;
			} //������ ����üũ
			if(!document.member_form.chi_name.value) {
				alert("�ѹ����� �Է��ϼ���");
				return;
			} //�ѹ��� ����üũ
			if(!document.member_form.email1.value) {
				alert("�̸����ּҸ� �Է��ϼ���");
				return;
			} //�̸����ּ� ����üũ
			if(!document.member_form.email2.value) {
				alert("�̸��� �������� �Է��ϼ���");
				return;
			} //�̸��� ����üũ
			if (!document.member_form.phone1.value || !document.member_form.phone2.value || !document.member_form.phone3.value) {
				alert("�޴��� ��ȣ�� �Է��ϼ���");    
				document.member_form.nick.focus();
				return;
			} //�޴��ȣ ����üũ
			if(!document.member_form.birth.value) {
				alert("��������� �Է��ϼ���");
				return;
			} //������� ����üũ
			if(!document.member_form.zipcode.value) {
				alert("�����ȣ�� �Է��ϼ���");
				return;
			} //�����ȣ ����üũ
			if(!document.member_form.address.value) {
				alert("�⺻�ּҸ� �Է��ϼ���");
				return;
			} //�⺻���� ����üũ
			if(!document.member_form.address_sub.value) {
				alert("���ּҸ� �Է��ϼ���");
				return;
			} //���ּ� ����üũ
		
			document.member_form.submit();
		} //�Է¶� ���� �� ����ġ üũ
	</script>

	</head>

	<body>
		<div id="wrap">			
			<? include "../_inc/fix_left.php"; ?>
			<? include "../_inc/q_menu.php"; ?>
			<div id="contents">
				<div class="sub_cont">
					<div class="tit">
						<h2>ȸ������</h2>
						<ol class="his">
							<li><a href="/"><img src="/_img/comn/home.png" alt="Ȩ" /></a></li>
							<li><a href="/member/join_sel.php">ȸ������</a></li>
							<li><a href="#" class="here">ȸ�������Է�</a></li>
						</ol>
					</div>
					<div class="s_cont">
						<h3>�ʼ�ȸ������</h3>
						<h4>ȸ�������� ���� �ʼ� ������ �Է��մϴ�</h4>
						<table class="join_form mt20">
							<form name="member_form" method="post" action="insert.php?mode=<?=$mode?>">
							<colgroup><col width="200px"><col width=""></colgroup>
							<tr>
								<th>�̸�</th>
								<td><input type="text" name="name"/></td>
							</tr>
							<tr>
								<th>���̵�</th>
								<td class="over">
									<p class="f_l mr5"><input type="text" name="id" /></p> 
									<!-- ȸ�� ��ȸ
									<p class="f_l mr5"><a class="btn_id" href="#" ">ȸ����ȸ</a></p>
									<span class="t_green">��밡���մϴ�.</span>
									<span class="t_red" style="display:none">�̹� ����ϰ� �ֽ��ϴ�.</span>
									-->
								</td>
							</tr>
							<tr>
								<th>��й�ȣ</th>
								<td><input type="password" name="pass"/> <span class="ml5 text">��й�ȣ�� ���� ���� ������ҹ���, ����, Ư������ ���� 8~20�� ����ؾ� �մϴ�.</span></td>
							</tr>
							<tr>
								<th>��й�ȣ Ȯ��</th>
								<td><input type="password" name="pass_confirm"/> <span class="ml5 text">��й�ȣ�� �ٽ� �ѹ� �Է����ּ���</span></td>
							</tr>
							<tr>
								<th>�̸�(������)</th>
								<td><input type="text" name="eng_name" /></td>
							</tr>
							<tr>
								<th>�̸�(�ѹ���)</th>
								<td><input type="text" name="chi_name"/></td>
							</tr>
							<tr>
								<th>�̸����ּ�</th>
								<td>	
									<div class="overflow">
										<p class="f_l mr5" style="display:inline-block"><input type="text" style="width:150px" name="email1" /> @ <input type="text" style="width:150px" name="email2"/></p>
										<!-- �̸��� ���� ���� 
										<p class="f_l sel" style="width:160px;">
											<select style="width:160px;" name="email2" id="email2" >
												<option value="">�̸��ϼ���</option>
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
												<option value="1">�����Է�</option>
											</select>						
											<span style="width:150px;">�̸��ϼ���</span>
										</p>
										-->
									</div>									
									<p class="mt5 text">��ȿ�� �̸��Ϸ� �Է� �ٶ��ϴ�. ��ȿ�� �̸����� �ƴ� ���, ȸ������ �̿뿡 ������ �� �� �ֽ��ϴ�.</p>
								</td>
							</tr>
							<tr>
								<th>�̸��ϼ���</th>
								<td>
									<div class="overflow">
										<p class="text_b f_l">�� ���� �������͸� ��û�Ͻðڽ��ϱ�?</p>										
										<p class="f_l ml20">
											<input type="radio" name="email_news" value="Y" checked=""><label for="ex1">&nbsp;��</label>
											<input type="radio" name="email_news" value="N" class="ml10"><label for="ex2">&nbsp;�ƴϿ�</label>
										</p>
									</div>
									<p class="text">�̸��� ���ŵ��� �Ͻø� ������ ����, �������� ���������� ���� �̺�Ʈ ������ �޾ƺ��� �� �ֽ��ϴ�.</p>
								</td>
							</tr>
							<tr>
								<th>�ڵ���</th>
								<td class="over">	
									<!-- ���� ���� 
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
										<!-- ����ó ��ȸ 
										<a class="btn_id" href="#">����ó ��ȸ</a>
										-->
									</p>
								</td>
							</tr>
							<tr>
								<th>SMS ����</th>
								<td>
									<p class="text">�̺�Ʈ�� �ֹ� ���� ������ SMS�� �޾ƺ��ðڽ��ϱ�?</p>
									<p>
										<input type="radio" name="sms" value="Y" checked=""><label for="ex1">&nbsp;��</label>
										<input type="radio" name="sms" value="N" class="ml20"><label for="ex2">&nbsp;�ƴϿ�</label>
									</p>
								</td>
							</tr>
							<tr>
								<th>�������</th>
								<td class="over">
									<!-- ������� �Է½� ��ü
									<p class="sel f_l mr5" style="width:100px">
										<select name="phone1" style="width:100px">
											<option selected>����</option>
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
										<span>����</span>
									</p>
									<p class="sel f_l mr5" style="width:100px">
										<select name="phone1" style="width:100px">									
											<option selected>��</option>
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
										<span>��</span>
									</p>

									<p class="sel f_l mr5" style="width:100px">
										<select name="phone1" style="width:100px">
											<option selected>��</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
										</select>
										<span>��</span>
									</p>
									-->
									<input style="width:120px"  name="birth" value="ex)19800101">
									<!-- �̹��� ��� ����
									<img src="/_img/cont/i_cal.png" alt="�޷¼���" title="�޷¼���" style="margin-left:5px; vertical-align:middle; cursor:pointer;">
									-->
								</td>
							</tr>
							<tr>
								<th>����</th>
								<td><p>
											<input type="radio" name="gen" value="M" checked=""><label for="ex1">&nbsp;����</label>
											<input type="radio" name="gen" value="F" class="ml20"><label for="ex2">&nbsp;����</label>
										</p>
								</td>
							</tr>
							<tr>
								<th>�ּ�</th>
								<td>
									<div>
										<p style="display:inline-block">
											<span class="mr10 text">�����ȣ : </span>
											<input name="zipcode" value="">								
										</p>
										<p style="display:inline-block">
											<!-- �����ȣ ã�� ����
											<a class="btn_id" href="javascript:;" onclick="layer_open('layer1');return false;">ã��</a>
											-->
										</p>
									</div>

									<p class="mt5">
										<span class="mr10 text">�⺻�ּ� : </span>
										<input style="width:70%" name="address" value="">
									</p>
									<p class="mt5">
										<span class="mr10 text">���ּ� : </span>
										<input style="width:70%" name="address_sub" value="">
									  </p>
								</td>
							</tr>
							</form>
						</table>
				

						<p class="mt30 c"><a class="btn_gry" href="join_sel.php">���</a> <a class="btn_red" onclick="check_input()">ȸ������</a></p> 
				</div>
			</div>
		</div>
		
	</body>

</html>
<!--�����ȣã�� �˾�-->
<div class="layer">
	<div class="bg"></div>
	<div id="layer1" class="pop-layer">
		<div class="pop_top">
			<h2>�����ȣã��</h2>
			<p class="close"><a href="#" class="cbtn"><img width="18px" src="../_img/cont/pop_close.png" alt="�ݱ�"/></a></p>
		</div>
		<div class="pop_cont">
			���⿡ �����ȣã�� ȭ���� ����ּ���
			<!---���������ȣ���� http://postcode.map.daum.net/guide-->
		</div>
	</div>		
</div>
<!--//�����ȣã�� �˾���-->


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