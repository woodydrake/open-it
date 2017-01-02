<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/__RootDIR__.php";
include_once $RootDIR."/_include/_header.php";
//admin_login_check();

$page			= $_REQUEST["page"];
$size			= $_REQUEST["size"];

$schField		= $_REQUEST["schField"];
$schValue		= $_REQUEST["schValue"];

$stateYn		= $_REQUEST["stateYn"];

$start_date		= $_REQUEST["start_date"];
$end_date		= $_REQUEST["end_date"];

$depth01 = 1;
$depth02 = 3;

if(!$page) $page = 1; //�⺻ ������
if(!$size) $size = 10; //�⺻ ������

$sch_sql = "";

if($schValue != ""){
	if($schField == ""){
		$sch_sql = " AND ( user_id LIKE '%".$schValue."%' OR user_name LIKE '%".$schValue."%' OR user_email LIKE '%".$schValue."%' OR user_phone LIKE '%".$schValue."%') ";
	}else{
		$sch_sql = " AND ( ".$schField." LIKE '%".$schValue."%'  ) ";
	}
}


/*if($adminType != "") {
	if($adminType == "1") {
		$sch_sql .= " and level = '9'";
	}else{
		$sch_sql .= " and level = '2'";
	}
}*/

if($stateYn != "") {
	if($stateYn == "Y") {
		$sch_sql .= " and use_yn = 'Y'";
	}else{
		$sch_sql .= " and use_yn = 'N'";
	}
}

if($start_date != "" && $end_date != ""){
	$sch_sql = $sch_sql." AND date_format(reg_dt, '%Y-%m-%d') BETWEEN '".$start_date."' and '".$end_date."' ";
}

$sql = "SELECT COUNT(*) FROM t_member WHERE level='5' ".$sch_sql."";
$result = mysql_query($sql);
$TotalCnt = mysql_result($result , 0 ,0 );

$getvalue = "schField=".$schField."&schValue=".$schValue."&start_date=".$start_date."&end_date=".$end_date."&size=".$size."&page=".$page."&stateYn=".$stateYn;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<? include "../_inc/title.php"; ?>
<script type="text/javascript">
$(document).ready(function (){
	$("#schField").val("<?=$schField?>");
	$("#schValue").val("<?=$schValue?>");
	$("#size").val("<?=$size?>");
	$("#start_date").val("<?=$start_date?>"); 
	$("#end_date").val("<?=$end_date?>");

	$("#start_date").datepicker();
	$("#end_date").datepicker();
});


function fn_delete( member_srl ){
	if(confirm("���� �Ͻðڽ��ϱ�?")){
		$("#SubmitMode").val("del");
		$("#member_srl").val(member_srl);
		$("#schFrm").attr("action" , "./admin_proc.php");
		$("#schFrm").submit();
	}
}

function popdate_check(){
	var start = $("#start_date").val().replace("-","");
	start = start.replace("-","");
	var end = $("#end_date").val().replace("-","");
	end = end.replace("-","");
	if(start!="" && end!=""){
		if(start > end){
			alert("�������� �����Ϻ��� �ռ� �� �����ϴ�.");
			return;
		}
		$("#schFrm").submit();
	}
}
</script>

</head>
<body>
<?
	echo "".$page."<br>";
	echo "".$size."<br>";
	echo "".$schField."<br>";
	echo "".$schValue."<br>";
	echo "".$stateYn."<br>";
	echo "".$start_date."<br>";
	echo "".$end_date."<br>";
?>

	<div id="wrap">
		<div id="top">
		<? include "../_inc/top.php"; ?>
		</div>

		<div id="colgroup">
			<div id="left">
			<? include "../_inc/member_left.php"; ?>
			</div>
			<!--�����̳� �޴��� ��� �ڵ����� �þ�� �߾��~ ���ڼ� ��������-->
			<div id="right">
				<!--���尪�� �Ϻη� ������ �����~ ������������ �����ϼſ� 100%�ϼŵ� �ǿ�! ie6�� ������ _width:770px;�ϱ� �������� ���ſ�-->
				<div style="width:900px; _width:770px;">
					<h3>ȸ������ > �����ڰ���</h3>
					<!--����� �� �ø��Ǽ� �־��~ li�κи� �ø��ż� ����Ͻø� �ǿ�-->
					<form name="schFrm" id="schFrm" method="get" action="admin_list.php">
						<input type="hidden" name="SubmitMode" id="SubmitMode" value=""/>
						<input type="hidden" name="member_srl" id="member_srl" value=""/>
						<input type="hidden" name="page"  value="<?=$page?>"/>
						<ul class="search">
							<li>
								<p class="tit">������</p>
								<p class="select">
									<input type="text" name="start_date" id="start_date" size="14" class="datepicker-input " value="" style="height:25px;" onchange="popdate_check();" readonly/>&nbsp;~&nbsp;
									<input type="text" name="end_date" id="end_date" size="14" class="datepicker-input " value="" style="height:25px;" onchange="popdate_check();" readonly/>
								</p>
							</li>
							<li>
								<p class="tit">������,�п�������</p>
								<input type="radio" name="adminType" id="adminType1" value="" <?if($adminType == ""){?>checked<?}?>/><label for="adminType1"> ��ü</label>&nbsp;
								<input type="radio" name="adminType" id="adminType2" value="1" <?if($adminType == "1"){?>checked<?}?>/><label for="adminType2"> ������</label>&nbsp;
								<input type="radio" name="adminType" id="adminType3" value="2" <?if($adminType == "2"){?>checked<?}?>/><label for="adminType3"> �п�������</label>
							</li>
							<li>
								<p class="tit">����</p>
								<input type="radio" name="stateYn" id="stateYn1" value="" <?if($stateYn == ""){?>checked<?}?>/><label for="stateYn1"> ��ü</label>&nbsp;
								<input type="radio" name="stateYn" id="stateYn2" value="Y" <?if($stateYn == "Y"){?>checked<?}?>/><label for="stateYn2"> Y</label>&nbsp;
								<input type="radio" name="stateYn" id="stateYn3" value="N" <?if($stateYn == "N"){?>checked<?}?>/><label for="stateYn3"> N</label>
							</li>
							<li>
								<p class="tit">�˻�</p>
								<p class="select">
									<select name="schField" id="schField"> 
										<option value="">��ü</option>
										<option value="user_id">���̵�</option>
										<option value="user_nm">�̸�</option>
										<option value="email">�̸���</option>
										<option value="phone">����ó</option>
									</select>
									<input type="text" name="schValue" id="schValue" value="<?=$schValue?>">
									<input type="image" src="../_img/comn/btn_search.gif" width="46" height="20" border="0" alt="" style="width:46px;height:20px;border:0px">
								</p>
							</li>
						</ul>									

						<div class="date">
							<p class="SearchDate">�˻��� ������ : <span id="total_cnt"><?=$TotalCnt?></span>��</p>
							<p class="DateView">
								<select name="size" id="size" onchange="schFrm.submit()">
									<option value="10">10���� ����</option>
									<option value="20">20���� ����</option>
									<option value="30">30���� ����</option>
									<option value="50">50���� ����</option>							
								</select>
							</p>
						</div>
					</form>

					<table cellpadding="0" cellspacing="0" class="list01">
					  <colgroup>
						<col width="4%"/>
						<col width="4%"/>
						<col width="8%"/>
						<col width="8%"/>
						<col width="10%"/>
						<col width="10%"/>
						<col width="8%"/>
						<col width="8%"/>
						<col width="10%"/>
						<col width="10%"/>
						<col width="6%"/>
						<col width="12%"/>
					  <colgroup>
					  <tr class="tit">
						<th>No</th>
						<th><input type="checkbox" /></th>
						<th>ID</th>
						<th>�̸�</th>
						<th>Level</th>
						<th>�ڵ���</th>
						<th>�̸���</th>
						<th>������</th>
						<th>�ڵ���Ʈ</th>
						<th>�ӽ���Ʈ</th>
						<th>��뿩��</th>
						<th>����</th>
					  </tr>
<?
					if($TotalCnt > 0){
						if($page > ceil($TotalCnt / $size)) $page = ceil($TotalCnt / $size);
						$start = ($page-1) * $size;
						$count = $TotalCnt - (($page-1) * $size);
						$sql = "SELECT * FROM t_member WHERE level in (2,9) ".$sch_sql."ORDER BY reg_dt DESC LIMIT ".$start.",".$size;
						$result = mysql_query($sql);
						while($row = mysql_fetch_array($result)){
							$admin_email	= explode( '@',$row["admin_email"] );
?>
							<tr onMouseOver="this.className='pic_on'" onMouseOut="this.className='pic_off'">
								<td><?=$count--?></td>
								<td><input type="checkbox" /></td>
								<td><a href="admin_view.php?member_srl=<?=$row["member_srl"]?>&<?=$getvalue?>&page=<?=$page?>"><?=$row["user_id"]?></a></td>
								<td><a href="admin_view.php?member_srl=<?=$row['member_srl']?>&<?=$getvalue?>&page=<?=$page?>"><?=$row['user_nm']?><?if($row['branch_nm'] != '') echo "(".$row['branch_nm'].")"  ?></a></td>
								<td>
									<? if($row["level"] == "1") { ?>
										������
									<? } else {?>
										�п�������
									<?}?>
								</td>
								<?
									$tempTelNumber = $row['phone'];
									$tempTelNumberLength = strlen($tempTelNumber);
									if($tempTelNumberLength <= 9){
										$tempTelNumber1 = substr($tempTelNumber,0,2);$tempTelNumber2 = substr($tempTelNumber,2,3);$tempTelNumber3 = substr($tempTelNumber,5,4);
									}else if($tempTelNumberLength == 10){
										$tempTelNumber1 = substr($tempTelNumber,0,3);$tempTelNumber2 = substr($tempTelNumber,3,3);$tempTelNumber3 = substr($tempTelNumber,6,4);
									}else if($tempTelNumberLength == 11){
										$tempTelNumber1 = substr($tempTelNumber,0,3);$tempTelNumber2 = substr($tempTelNumber,3,4);$tempTelNumber3 = substr($tempTelNumber,7,4);
									}
								?>
								<td>
									<? if($row['phone'] != "") { ?>
										<?=$tempTelNumber1?>-<?=$tempTelNumber2?>-<?=$tempTelNumber3?>
									<? } ?>
								</td>
								<td><?=$row['email']?></td>
								<td><?=$row['reg_dt']?></td>
								<td>
									<? if($row['member_type_h_nm'] != "") { ?>
										<?=$row[member_type_h_nm]?><br>(<?=$row[member_type_h_explain_nm]?>)
									<? } ?>
								</td>
								<td>
									<? if($row['member_type_m_nm'] != "") { ?>	
										<?=$row[member_type_m_nm]?><br>(<?=$row[member_type_m_explain_nm]?>)
									<? } ?>
								</td>
								<td><?=$row['use_yn']?></td>

								<!--<td style="<?=$thisStyel?>">
									<?if($level == 9){?><a href="/_admn_/member/memberAdd.php?member_srl=<?=$data['member_srl']?>" class="button"><span>����</span></a><?}?>
									<?if($level == 2){?><a href="/_admn_/member/memberAddT.php?member_srl=<?=$data['member_srl']?>" class="button"><span>����</span></a><?}?>
								</td>=-->

								<td class="last">
									<a class="btn_s_gray" href="./admin_write.php?member_srl=<?=$row["member_srl"]?>&<?=$getvalue?>&page=<?=$page?>&SubmitMode=upt"><span>����</span></a>
									<a class="btn_s_gray" href="javascript:fn_delete('<?=$row["member_srl"]?>')"><span>����</span></a>
								</td>
							</tr>
<?
						}
					}else{
?>
						<tr><td colspan="10">���(�˻�) ����� �����ϴ�.</td></tr>
<?
					}
?>
							<tr>
								<td colspan="12" class="num_bg">
									<p class="num"><?paging("$_SERVER[PHP_SELF]?$getvalue", $TotalCnt, $page, $size);?></p>
								</td>
							</tr>
					</table>

					<div class="ListBtn">						
						<div id="gBtn1" class="float_right">
							<a href="./admin_write.php"><span>ȸ�����</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<? include "../_inc/footer.php"; ?>	
</body>
</html>
