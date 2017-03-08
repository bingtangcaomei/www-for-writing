<?php
$dbhost = 'localhost';
$dbuser='root';
$dbpass='root';
//链接数据库
@$conn=mysql_connect($dbhost,$dbuser,$dbpass);
if(!$conn){
	die('链接失败!<br/>');
}
    echo '链接成功!<br/>';
 //创建数据库
/*$sql='CREATE DATABASE title';
$retval =mysql_query($sql,$conn);
if(!$retval){
     die('创建数据库失败!');
}
echo '数据库创建成功!';  */
 //数据表创建
//用户表
/*  $sql = "CREATE TABLE user(
 	 id INT NOT NULL AUTO_INCREMENT,
 	 uid VARCHAR(100) NOT NULL,
     pass VARCHAR(100) NOT NULL,
 	 pression VARCHAR(100) NOT NULL,
 	 PRIMARY KEY(id))"; */
    //系统公告
/*     $sql = "CREATE TABLE notice(
 	 id INT NOT NULL AUTO_INCREMENT,
     title VARCHAR(100) NOT NULL,
 	 content VARCHAR(100) NOT NULL,
     date VARCHAR(100) NOT NULL,
 	 PRIMARY KEY(id))"; */
// 稿件表
/*     $sql = "CREATE TABLE word(
 	 id INT NOT NULL AUTO_INCREMENT,
 	 user VARCHAR(100) NOT NULL,
 	 title VARCHAR(100) NOT NULL,
     admin VARCHAR(100) ,
     advice VARCHAR(100) ,
 	 PRIMARY KEY(id))"; */
    //留言表
     $sql = "CREATE TABLE text(
     id INT NOT NULL AUTO_INCREMENT,
     user VARCHAR(100) NOT NULL,
     text VARCHAR(100) NOT NULL,
     text1 VARCHAR(100) ,
     PRIMARY KEY(id))"; 
 //数据表删除
 /* $sql="DROP TABLE "; */
 mysql_select_db('title');
 $result=mysql_query($sql,$conn);
 if(!$result){
 	die('数据表创建失败！');
 }
 echo '数据表创建成功！';
//关闭数据库
mysql_close($conn);
?>