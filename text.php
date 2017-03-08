<title>留言板</title>
 <center>
       <div class="logo">
      <img src="css/logo.png">
      </div><br>
<?php
echo "用户:"."<font color='blue'>". $_COOKIE["user"] . "</font>"."<br><br>";
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
@$conn = mysql_connect ( $dbhost, $dbuser, $dbpass );
if (! $conn) {
	die ( '连接数据库失败！' );
}
$user=$_COOKIE['user'];
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
					<th>建议</th>
				</tr>
<?php
while($arr=mysql_fetch_assoc($result)){
?>
				<tr>
                    <td><?php echo @$arr['user'];?></td>   
                    <td><?php echo @$arr['text'];?></td>
                    <td><?php echo @$arr['text1'];?></td>
                    
                </tr>
                  <?php 	} ?>  
                            </table><br><br>
                         
<h1>发布留言</h1>
<form action="settext.php" method="post">
<textarea rows="8" cols="35" name="text" id="text"></textarea><br><br>
<input type ="submit" value="发布" id="fabu" name="fabu">
<a href="userok.php">返回</a>  
</form>

        <?php 
            mysql_close();//关闭数据库
        ?>
 <div class="footer"><font color="red">©冰糖草莓 2016.12</font></div>
 </center>