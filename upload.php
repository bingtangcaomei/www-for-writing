<center>
<div class="all">
      <div class="logo">
      <img src="css/logo.png">
      </div><br>
<?php
echo "当前用户:"."<font color='blue'>". $_COOKIE["user"] . "</font>"."<br><br><br>";
$arrType=array('application/msword');
$upfile='./word'; //稿件目录路径
$max_size='5000000';      // 最大文件限制（单位：byte）
$file=$_FILES['upfile'];

 if($_SERVER['REQUEST_METHOD']=='POST'){ //判断提交方式是否为POST
     if(!is_uploaded_file($file['tmp_name'])){ //判断上传文件是否存在
    echo "<font color='red'>文件不存在！</font>";
    echo "<br><a href='userok.php'>返回</a>";
    exit;
    }
   
  if($file['size']>$max_size){  //判断稿件的大小
    echo "<font color='red'>上传文件太大！</font><br><br>";
    echo "<br><a href='userok.php'>返回</a>";
    exit;
   } 
  if(!in_array($file['type'],$arrType)){  //判断稿件的格式
     echo "<font color='red'>上传文件格式错误！</font><br><br>";
     echo "<br><a href='userok.php'>返回</a>";
     exit;
   }
  if(!file_exists($upfile)){  // 判断存放文件目录是否存在
   mkdir($upfile,0777,true);
   } 
  @ $imageSize=getimagesize($file['tmp_name']);
   $img=$imageSize[0].'*'.$imageSize[1];
   $fname=$file['name'];
   $ftype=explode('.',$fname);
   $picName=$upfile."/cloudy".$fname;
   
   if(file_exists($picName)){
    echo "<font color='red'>同文件名已存在！</font><br><br>";
    echo "<a href='userok.php'>返回</a>";
    exit;
     }
   if(!move_uploaded_file($file['tmp_name'],$picName)){  
    echo "<font color='red'>移动文件出错！</font><br><br>";
    echo "<a href='userok.php'>返回</a>";
    exit;
    }
   else{
   	$dbhost = 'localhost';
   	$dbuser = 'root';
   	$dbpass = 'root';
   	@$conn = mysql_connect ( $dbhost, $dbuser, $dbpass );
   	if (! $conn) {
   		die ( '连接数据库失败！' );
   	}
   	$user=$_COOKIE['user'];
	mysql_select_db ( 'title' );
	$sql = "INSERT INTO word (user,title) VALUES ('$user','$fname')";
	$result = mysql_query ( $sql, $conn );
   	if (! $result) {
   		echo $user.'<br>';echo $fname.'<br>';
   		echo ( '<font color="red">上传失败！</font><br><br>' );
   		$file1="../word/cloudy$fname";
   		$result = @unlink ($file1);
   		if($result == TRUE){
   	   		}
   		echo "<a href='userok.php'>返回</a>";
   	}else{
echo "稿件: $fname<font color='red'>上传成功！</font><br><br>";
echo "<a href='userok.php'>返回</a>";}
   }}
?>

</center>
