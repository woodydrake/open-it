<!doctype html>

<html>

	<head>
	<? include "../_inc/title.php"; ?>
	
	<!--�Է¶� Ȯ�� ����(����)-->
	<script type="text/javascript">
		function login_check(){
			var user_id = $("#user_id").val();
			var user_pwd = $("#user_pwd").val();
			var id_save = $("input:checkbox[id='id_save']").is(":checked");

			if (user_id == "") {
				alert("���̵� �Է��ϼ���.");
				$("#user_id").focus();
				return false;
			}
			if (user_pwd == "") {
				alert("��й�ȣ�� �Է��ϼ���.");
				$("#user_pwd").focus();
				return false;
			}
			$("#loginFrm").submit();

		}	
	</script>
	<!--�Է¶� Ȯ�� ����(����) ��-->
	</head>
	<body>
		<div id="wrap">			
			<? include "../_inc/fix_left.php"; ?>
			<? include "../_inc/q_menu.php"; ?>
			<div id="contents">
				<div class="sub_cont">
					<div class="tit">
						<h2>�α���</h2>
						<ol class="his">
							<li><a href="/"><img src="/_img/comn/home.png" alt="Ȩ" /></a></li>
							<li><a href="/member/login.php" class="here">�α���</a></li><!--<a href="#" class="here">-->
						</ol>
					</div>
					<div class="s_cont">
						<div class="login_box">
							<p class="lo_tit01"><span>�ڸ��� ��Ʈ ���� </span>�� ���Ű��� ȯ���մϴ�.</p>
							<p class="lo_tit02 mt20">�α����� �Ͻø� ����� �پ��� ���񽺸� ���� �� �ֽ��ϴ�. <br/>ȸ�������� �Ǿ����� ������ ���� ȸ������ �� �̿��� �ֽñ� �ٶ��ϴ�.</p>
							<form name="loginFrm" id="loginFrm" action="../member/login_proc.php" method="post"><!--�α��� �� ����(����)-->
							<ul class="login">
								<li>
									<p><span style="width:68px;">���̵�</span><input type="text" name="user_id" placeholder="���̵� �Է����ּ���"  /></p><!--<input type="text" placeholder="���̵� �Է����ּ���"  />-->
									<p class="pa"><span style="width:68px;">��й�ȣ</span><input type="password" name="user_pwd" placeholder="��й�ȣ�� �Է����ּ���"/></p><!--<input type="password" placeholder="��й�ȣ�� �Է����ּ���"/>-->
								</li>
								<li class="btn"><a href="JavaScript:login_check()" >�α���</a></li><!--<a href="#" >-->
							</ul>
							</form><!--�α��� �� ����(����) ��-->

							<p class="checks01"><input type="checkbox" name="checks" id="info" style="vertical-align:-2px; margin-top:10px; margin-left:5px;"> <label for="info">���̵�����</label></p>
						</div>	

						<ul class="find_box">
							<li>
								<h5>ȸ������ ���̵� ��й�ȣ�� �ؾ�����̳���?</h5>
								<p class="mt15"><a href="/member/find_id.php">���̵� ã��</a>&nbsp;&nbsp;<a href="/member/find_pa.php">��й�ȣ ã��</a></p>
							</li>
							<li>
								<h5>�ڸ�����Ʈ������ ���� �پ��� ���񽺸� ��� �� �� �ֽ��ϴ�.</h5>
								<p class="mt15"><a href="/member/join_sel.php">ȸ������</a></p>
							</li>
						</ul>
						
					</div>
			</div>
		</div>
		
	</body>

	<? include "../_inc/f_jsp.php"; ?>

</html>
