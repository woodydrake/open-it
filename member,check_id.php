<meta charset="euc-kr">
<?

$id = $_REQUEST['id'];

if(!$id) {
	echo("���̵� �Է��ϼ���.");
}
else {
	include_once "../_include/_DbConn.php";
		
	$sql = "select * from t_member where user_id = '$id' ";

	$result = mysql_query($sql, $dbconn);
	$num_record = mysql_num_rows($result);

	if($num_record) {
		echo "���̵� �ߺ��˴ϴ�!�ٸ� ���̵� ����ϼ���.<br>";
	}
	else {
		echo "��밡���� ���̵��Դϴ�.";
	}

	mysql_close();
}
echo ("
	<script>
		location.href = '../index.php';
	</script>
");
?>