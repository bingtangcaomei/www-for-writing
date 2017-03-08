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
$title = $_POST ['title'];
$content = $_POST ['content'];
$date=date("Y-m-d");
if (isset ( $_POST ['fabu'] )){
	$sql = "INSERT INTO notice (title,content,date) VALUES ('$title','$content','$date')";
	mysql_select_db('title');
	$result = mysql_query ( $sql, $conn );
	if (! $result) {
		die ( '发布失败！');
	}
	echo '<h1>发布成功！</h1><br>正在返回..';
}
?>
<div class="footer"><font color="red">©冰糖草莓 2016.12</font></div>
</center>
<meta http-equiv="Refresh" content="2;URL=ad_notice.php" />