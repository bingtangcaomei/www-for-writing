<center>
      <div class="logo">
      <img src="css/logo.png">
      </div><br><br><br><br><br>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
@$conn = mysql_connect ( $dbhost, $dbuser, $dbpass );
if (! $conn) {
	die ( '连接数据库失败！' );
}
$user = $_POST ['user'];
$pass = $_POST ['pass'];
if (isset ( $_POST ['denglu'] )) {
	mysql_select_db ( 'title' );
	$sql = "SELECT uid,pass,pression FROM user WHERE uid='$user'";
	$result = mysql_query ( $sql, $conn );
	if (! $result) {
		die ( '' );
	}
	while ( $row = mysql_fetch_array ( $result, MYSQL_ASSOC ) ) {
		$uid = $row['uid'];
		$password = $row ['pass'];
		$pression = $row ['pression'];
	}
	if (@$user==@$uid && $pression == "用户"){
	     if (@$pass == $password ) {
		     echo "<script>url='userok.php';window.location.href=url;</script>";
	     } else {
		     echo "账号/密码错误<br>";
		     echo "<a href='index.php'>登录</a>";
	     }
	} else {
		echo "账号不存在<br>";
		echo "<a href='index.php'>登录</a>";
	}
}
	mysql_close ();
setcookie ( "user", "$user" );
?><br><br><br><br><br>
<div class="footer"><font color="red">©冰糖草莓 2016.12</font></div></center>