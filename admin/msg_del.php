<center>
<div class="logo">
      <img src="../css/logo.png">
      </div>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
$id=$_GET['id'];
@$conn = mysql_connect ( $dbhost, $dbuser, $dbpass );
if (! $conn) {
	die ( '连接数据库失败！' );
}
mysql_select_db ( 'title' );
$sql="DELETE FROM text WHERE id='$id'";
$result=mysql_query($sql,$conn);
if (!$result){
	die('');
}
echo "<h1>问题已删除！</h1><br>正在返回..";
?>
<div class="footer"><font color="red">©冰糖草莓 2016.12</font></div>
</center>
<meta http-equiv="Refresh" content="2;URL=message.php" />