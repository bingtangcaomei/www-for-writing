<title>投稿系统</title>
<center>
      <div class="logo">
      <img src="css/logo.png">
      </div><br>
<?php
echo "当前用户:" ."<font color='blue'>". $_COOKIE["user"] . "</font>"."<br>";
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
@$conn = mysql_connect ( $dbhost, $dbuser, $dbpass );
if (! $conn) {
	die ( '连接数据库失败！' );
}
$user=$_COOKIE['user'];
$sql = "SELECT * FROM notice order by id DESC";
mysql_select_db ( 'title' );
$result = mysql_query ( $sql, $conn );
if (! $result) {
	die ( '' );
}
?>
	<h1>系统公告</h1>
	<table>
		       <tr>
					<th>标题</th>
					<th>内容</th>
					<th>时间</th>
				</tr>	
<?php
while($arr=mysql_fetch_assoc($result)){
?>
				<tr>
                    <td><?php echo $arr['title'];?></td>
                    <td><?php echo $arr['content'];?></td>
                    <td><?php echo $arr['date']?></td>              
                </tr>
                  <?php 	} ?>  
                            </table>

        <?php 
            mysql_close();//关闭数据库
        ?><br><br>
<form enctype="multipart/form-data" action="upload.php" method="post">
<input type="hidden" name="max_file_size" >
<input type="file" name="upfile" ><br><br>
<input type="submit" value="上传文件"><br>
<?php echo "<font color='red'>只能上传.doc格式的文档！</font><br><br>";?>
</form>
<a href="mycontent.php">我的稿件</a><br><br>
<a href="text.php">留言板</a><br><br>
<a href="pass.php">密码修改</a><br><br>
<a href="index.php">退出登录</a><br><br><br>
<div class="footer"><font color="red">©冰糖草莓 2016.12</font></div>
</center>

