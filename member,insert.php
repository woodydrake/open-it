<meta charset="eur-kr">
<?

$mode			=$_REQUEST['mode'];

$user_id		=$_POST['id'];
$user_pass		=$_POST['pass'];
$user_name		=$_POST['name'];
$user_eng_name	=$_POST['eng_name'];
$user_chi_name	=$_POST['chi_name'];

$hp1			=$_POST['phone1'];
$hp2			=$_POST['phone2'];
$hp3			=$_POST['phone3'];
$email1			=$_POST['email1'];
$email2			=$_POST['email2'];
$zipcode		=$_POST['zipcode'];
$address1		=$_POST['address'];
$address2		=$_POST['address_sub'];

$email_news		=$_POST['email_news'];
$sms_ok			=$_POST['sms'];

$user_birth		=$_POST['birth'];
$user_gen		=$_POST['gen'];

if($mode=="student") {
	$user_level		= "1";
} else if($mode=="teacher") {
	$user_level		= "2";
} else {
	$user_level		= "e";
}

$user_address	= $zipcode."-".$address1."".$address2;
$user_hp		= $hp1."-".$hp2."-".$hp3;
$user_email		= $email1."@".$email2;
$regist_day		= date("Y-m-d (H:i)");	//������ '��-��-��-��-��'�� ����

include "../_include/_DbConn.php";			//dconn.php ������ �ҷ���

$sql = "select * from t_member where user_id = '$user_id'";
$result = mysql_query($sql, $dbconn);
$exist_id = mysql_num_rows($result);

if($exist_id) {
	echo("
		<script>
			window.alert('�ش� ���̵� �����մϴ�.')
			history.go(-1)
		</script>
	");
	exit;
}
else {								//���ڵ� ���� ����� $sql�� �Է�
	$sql = "insert into t_member(user_name, user_id, user_pwd, user_eng_name, user_chi_name, user_email, user_emailok, user_phone, ";
	$sql .= "user_smsok, user_birth, user_gender, user_regist_day, level, use_yn, user_address) ";
	$sql .= "values('$user_name', '$user_id', '$user_pass', '$user_eng_name', '$user_chi_name', '$user_email', '$email_news', '$user_hp', ";
	$sql .= "'$sms_ok', '$user_birth', '$user_gen', '$regist_day', '$user_level', 'Y', '$user_address')";

	mysql_query($sql, $dbconn);	//sql�� ����� ��� ����
}
mysql_close();

echo ("
		<script>
			location.href = 'join_end.php';
		</script>
	");

?>
