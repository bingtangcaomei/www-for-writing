<title>系统公告</title>
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
					<th>操作</th>
				</tr>
<?php
while($arr=mysql_fetch_assoc($result)){
?>
				<tr>
                    <td><?php echo $arr['title'];?></td>
                    <td><?php echo $arr['content'];?></td>
                    <td><?php echo $arr['date']?></td>
                    <td><?php echo "<a href='noticedel.php?id=".$arr['id']."'><font color='red'>删除</a>"?></td>               
                </tr>
                  <?php 	} ?>  
                            </table>
<h1>发布公告</h1>
<form action="setnotice.php" method="post">
标题:&nbsp;<input type="text" name="title" id="title"><br><br>
内容:<br><br><textarea rows="8" cols="35" name="content" id="content"></textarea><br>
<input type ="submit" value="发布" id="fabu" name="fabu">
<a href="adminok.php">返回</a>
</form>
<div class="footer"><font color="red">©冰糖草莓 2016.12</font></div>
</center>