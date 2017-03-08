<center>
<div class="logo">
      <img src="../css/logo.png">
      </div>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
@$conn = mysql_connect ( $dbhost, $dbuser, $dbpass );
if (! $conn) {
	die ( '连接数据库失败！' );
}
$id=$_GET['id'];
mysql_select_db ( 'title' );
$sql ="UPDATE word SET admin='×' WHERE id='$id'";
$result = mysql_query ( $sql, $conn );
if (! $result) {
	die ( '' );
}
setcookie("id",$id);
?>
<h1>修改建议</h1>
<form action="ad_yes1.php" method="post">
<textarea rows="8" cols="35" name="advice" id="advice"></textarea><br>
<input type ="submit" value="提交" id="tijiao" name="tijiao">
<a href="select.php">返回</a><br><br>
</form>
<div class="footer"><font color="red">©冰糖草莓 2016.12</font></div>
</center>