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
$sql = "SELECT * FROM text";
mysql_select_db ( 'title' );
$result = mysql_query ( $sql, $conn );
if (! $result) {
	die ( '' );
}
?>
	<h1>留言信息</h1>
	<table>
		       <tr>
					<th>用户</th>
					<th>问题</th>
					<th>操作</th>
					<th>操作</th>
					<th>回答</th>
				</tr>
<?php
while($arr=mysql_fetch_assoc($result)){
?>
				<tr>
                    <td><?php echo @$arr['user'];?></td>
                    <td><?php echo @$arr['text'];?></td>
                    <td><?php echo "<a href='msg_answer.php?id=".$arr['id']."'><font color='red'>回复</a>"?></td>      
                    <td><?php echo "<a href='msg_del.php?id=".$arr['id']."'><font color='red'>删除</a>"?></td>      
                    <td><?php echo @$arr['text1'];?></td>
                    
                </tr>
                  <?php 	} ?>  
 </table>
<a href="adminok.php">返回</a>  
<div class="footer"><font color="red">©冰糖草莓 2016.12</font></div>
</center>