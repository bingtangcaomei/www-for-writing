<center>
<div class="logo">
      <img src="../css/logo.png">
      </div>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
$id=$_COOKIE['id'];
$advice= $_POST ['advice'];
@$conn = mysql_connect ( $dbhost, $dbuser, $dbpass );
if (! $conn) {
	die ( '连接数据库失败！' );
}
mysql_select_db ( 'title' );
$sql="UPDATE word SET advice=$advice WHERE id='$id'";
$result=mysql_query($sql,$conn);
if (!$result){
	die('');
}
	echo "<h1>修改建议已经下达！</h1><br>正在返回..";
?>
      
<div class="footer"><font color="red">©冰糖草莓 2016.12</font></div>
</center>
<meta http-equiv="Refresh" content="2;URL=select.php" />