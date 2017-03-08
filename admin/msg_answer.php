<center>
<div class="logo">
      <img src="../css/logo.png">
      </div>
<?php
$id=$_GET['id'];
setcookie("id",$id);
?>
<h1>回答问题</h1>
<form action="msg_answer1.php" method="post">
<textarea rows="8" cols="35" name="text1" id="text1"></textarea><br>
<input type ="submit" value="提交" id="tijiao" name="tijiao">
<a href="message.php">返回</a><br><br>
</form>
<div class="footer"><font color="red">©冰糖草莓 2016.12</font></div>
</center>