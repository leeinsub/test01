<?
include("../common.lib.php");

if($t1){
	$que = mysql_query("SELECT * FROM $LMS[company_table] WHERE del_yn_co = 'N' 
	AND co_name LIKE '%$t1%'") or die(sql_error());
	$cnt = mysql_num_rows($que);
}

if($t1 && $cnt < 1) $msg = "등록된 소속 정보가 없습니다.";
else $msg = "소속을 선택하세요.";
?>
<select name="co_id" id="co_id"  style="height:27px;" onchange="load_company2();">>
<option value=""><?=$msg;?></option>
<?
		while($row = mysql_fetch_array($que))
		{
?>
<option value="<?=$row[co_id];?>" <? if($t2==$row[co_id]) echo "selected";?>><?=htmlchars($row[co_name]);?></option>
<?
		}
?>
</select>

if($t1){
	$que = mysql_query("SELECT * FROM $LMS[company_table] WHERE del_yn_co = 'N' 
	AND co_name LIKE '%$t1%'") or die(sql_error());
	$cnt = mysql_num_rows($que);
}

if($t1 && $cnt < 1) $msg = "등록된 소속 정보가 없습니다.";
else $msg = "소속을 선택하세요.";
?>
<select name="co_id" id="co_id"  style="height:27px;" onchange="load_company2();">>
<option value=""><?=$msg;?></option>
<?
		while($row = mysql_fetch_array($que))
		{
?>
<option value="<?=$row[co_id];?>" <? if($t2==$row[co_id]) echo "selected";?>><?=htmlchars($row[co_name]);?></option>
<?
		}
?>
</select>

if($t1){
	$que = mysql_query("SELECT * FROM $LMS[company_table] WHERE del_yn_co = 'N' 
	AND co_name LIKE '%$t1%'") or die(sql_error());
	$cnt = mysql_num_rows($que);
}

if($t1 && $cnt < 1) $msg = "등록된 소속 정보가 없습니다.";
else $msg = "소속을 선택하세요.";
?>
<select name="co_id" id="co_id"  style="height:27px;" onchange="load_company2();">>
<option value=""><?=$msg;?></option>
<?
		while($row = mysql_fetch_array($que))
		{
?>
<option value="<?=$row[co_id];?>" <? if($t2==$row[co_id]) echo "selected";?>><?=htmlchars($row[co_name]);?></option>
<?
		}
?>
</select>

if($t1){
	$que = mysql_query("SELECT * FROM $LMS[company_table] WHERE del_yn_co = 'N' 
	AND co_name LIKE '%$t1%'") or die(sql_error());
	$cnt = mysql_num_rows($que);
}

if($t1 && $cnt < 1) $msg = "등록된 소속 정보가 없습니다.";
else $msg = "소속을 선택하세요.";
?>
<select name="co_id" id="co_id"  style="height:27px;" onchange="load_company2();">>
<option value=""><?=$msg;?></option>
<?
		while($row = mysql_fetch_array($que))
		{
?>
<option value="<?=$row[co_id];?>" <? if($t2==$row[co_id]) echo "selected";?>><?=htmlchars($row[co_name]);?></option>
<?
		}
?>
</select>
