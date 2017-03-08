<title>所有稿件</title>
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
mysql_select_db ( 'title' );
$sql = 'select count(*)  from word';
$result = mysql_query ( $sql, $conn );
if (! $result) {
	die ( '' );
}
while($tmp=mysql_fetch_row($result)){
	$a=$tmp[0];
}
$sql = 'select count(*)  from word where admin="√"';
$result = mysql_query ( $sql, $conn );
if (! $result) {
	die ( '' );
}
while($tmp=mysql_fetch_row($result)){
	$b=$tmp[0];
}
$sql = 'select count(*)  from word where admin="×"';
$result = mysql_query ( $sql, $conn );
if (! $result) {
	die ( '' );
}
while($tmp=mysql_fetch_row($result)){
	$c=$tmp[0];
}
echo "共有稿件<font color='red'>{$a}</font>份，录用了<font color='red'>{$b}</font>份，退回了<font color='red'>{$c}</font>份<br>";
$sql = "SELECT * FROM word";
$result = mysql_query ( $sql, $conn );
if (! $result) {
	die ( '' );
}
	?>
	<h1>稿件信息</h1><br>
	<table>
		       <tr>
					<th>名称</th>
					<th>操作</th>
					<th>操作</th>
					<th>状态</th>
					<th>意见</th>
				</tr>
<?php
while($arr=mysql_fetch_assoc($result)){
?>
				<tr>
                    <td><a href ="../../title/word/cloudy<?php echo $arr['title']?>"><?php echo @$arr['title'];?></a></td>   
                    <td><?php echo "<a href='ad_yes.php?id=".$arr['id']."'><font color='red'>录用</a>"?></td>
                    <td><?php echo "<a href='ad_no.php?id=".$arr['id']."'><font color='red'>退回</a>"?></td>
                    <td><?php echo @"<font color='red'>".$arr['admin'];?></td>
                    <td><?php echo @$arr['advice'];?></td>
                </tr>
                  <?php 	} ?>  
                            </table><br>
                            <a href="adminok.php">返回</a><br><br>

        <?php 
            mysql_close();//关闭数据库
        ?>
      
<div class="footer"><font color="red">©冰糖草莓 2016.12</font></div>
</center>