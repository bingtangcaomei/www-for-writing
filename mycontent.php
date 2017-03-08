<title>我的稿件</title>
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
$sql = "SELECT * FROM word where user= '$user'";
mysql_select_db ( 'title' );
$result = mysql_query ( $sql, $conn );
if (! $result) {
	die ( '' );
}
	?>
	<h1>稿件信息</h1>
	<table>
		       <tr>
					<th>名称</th>
					<th>状态</th>
					<th>意见</th>
				</tr>
<?php
while($arr=mysql_fetch_assoc($result)){
?>
				<tr>
                    <td><a href ="../title/word/cloudy<?php echo $arr['title']?>"><?php echo @$arr['title'];?></a></td>   
                    <td><?php echo @"<font color='red'>".$arr['admin'];?></td>
                    <td><?php echo @$arr['advice'];?></td>
                    
                </tr>
                  <?php 	} ?>  
                            </table><br>
                            <a href="userok.php">返回</a>

        <?php 
            mysql_close();//关闭数据库
        ?>
 <br><br><br><br><br><br>
 <div class="footer"><font color="red">©冰糖草莓 2016.12</font></div>
 </center>