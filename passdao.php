<center>
<div class="all">
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
mysql_select_db ( 'title' );
$pass=$_POST['pass'];
$pass1=$_POST['pass'];
$uid=$_COOKIE["user"];
$sql="SELECT pass FROM user WHERE uid='$uid'";
$result=mysql_query($sql,$conn);
if(!$result){
	die('');
}
while ( $row = mysql_fetch_array ( $result, MYSQL_ASSOC ) ) {
	$pass2 = $row ['pass'];
}
    if($pass==$pass1 && $pass2!=$pass){
	   $sql="UPDATE user SET pass=$pass WHERE uid='$uid'";
	   $result=mysql_query($sql,$conn);
	   if(!$result){
		   die('');
	   }
	echo "修改成功！<br>";
	echo "<a href='userok.php'>返回</a>";
}else {
	echo "不能与原密码相同！<br>";
	echo "<a href='userok.php'>返回</a>";
}
?><br><br><br><br><br><br>
<div class="footer"><font color="red">©冰糖草莓 2016.12</font></div>
</center>