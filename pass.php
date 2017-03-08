<title>密码修改</title>
<center>
<div class="all">
      <div class="logo">
      <img src="css/logo.png">
      </div><br>
<?php echo "用户:"."<font color='blue'>". $_COOKIE["user"] . "</font>"."<br><br>";?>
<h1>修改密码</h1>
<form action="passdao.php" method="post">
密&nbsp;&nbsp;码:<input type="password" name="pass" id="pass"><br><br>
重复密码:<input type="password" name="pass1" id="pass1"><br><br>
<input type="submit" value='修改' id="xiugai" name="xiugai" >
<a href="userok.php">返回</a>
</form><br><br>
<div class="footer"><font color="red">©冰糖草莓 2016.12</font></div>
</center>