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
$sql = "SELECT * FROM user WHERE pression='用户'";
mysql_select_db ( 'title' );
$result = mysql_query ( $sql, $conn );
if (! $result) {
	die ( '' );
}
	?>
	<h1>用户管理</h1>
	<table>
		       <tr>
					<th>用户</th>
					<th>操作</th>
				</tr>
<?php
while($arr=mysql_fetch_assoc($result)){
?>
				<tr>
                    <td><?php echo $arr['uid'];?></td>
                    <td><?php echo "<a href='ad_userdel.php?id=".$arr['id']."'><font color='red'>删除</a>"?></td>                  
                </tr>
                  <?php 	} ?>  
                            </table>
                            <a href="adminok.php">返回</a>

        <?php 
            mysql_close();//关闭数据库
        ?>
<div class="footer"><font color="red">©冰糖草莓 2016.12</font></div>
</center>