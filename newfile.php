<?php
date ( "Y-m-d H:i:s" ); // 显示当前时间
                     // header("Content-Disposition:online; filename=../word/cloudy444.doc");
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
@$conn = mysql_connect ( $dbhost, $dbuser, $dbpass );
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
echo "共有稿件<font color='red'>{$a}</font>份，录用了<font color='red'>{$b}</font>份，退回了<font color='red'>{$c}</font>份";
?>
<a href="../title/word/cloudy444.doc">下载</a>