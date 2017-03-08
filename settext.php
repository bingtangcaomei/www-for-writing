<center>
<div class="all">
      <div class="logo">
      <img src="css/logo.png">
      </div><br><br><br><br><br><br><br><br>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
@$conn = mysql_connect ( $dbhost, $dbuser, $dbpass );
if (! $conn) {
	die ( '连接数据库失败！' );
}
$user=$_COOKIE["user"];
$text = $_POST ['text'];
if (isset ( $_POST ['fabu'] )){
	@$sql = "INSERT INTO text (user,text) VALUES ('$user','$text')";
	mysql_select_db('title');
	$result = mysql_query ( $sql, $conn );
	if (! $result) {
		die ( '发布失败！');
	}
	echo '<h1>发布成功！</h1><br>正在返回..';
}
?>
<br><br><br><br><br><br><br><br>
<div class="footer"><font color="red">©冰糖草莓 2016.12</font></div>
</center>
<meta http-equiv="Refresh" content="2;URL=text.php" />