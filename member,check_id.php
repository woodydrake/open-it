<meta charset="euc-kr">
<?

$id = $_REQUEST['id'];

if(!$id) {
	echo("아이디를 입력하세요.");
}
else {
	include_once "../_include/_DbConn.php";
		
	$sql = "select * from t_member where user_id = '$id' ";

	$result = mysql_query($sql, $dbconn);
	$num_record = mysql_num_rows($result);

	if($num_record) {
		echo "아이디가 중복됩니다!다른 아이디를 사용하세요.<br>";
	}
	else {
		echo "사용가능한 아이디입니다.";
	}

	mysql_close();
}
echo ("
	<script>
		location.href = '../index.php';
	</script>
");
?>