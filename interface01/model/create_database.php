<?php

require('./connect.php');	/* 创好了链接 */

//创建数据库
$sql = "CREATE DATABASE shop";   //CREATE DATABASE 创建数据库  shop库名
$result = mysqli_query($conn,$sql);
if($result){
	echo "数据库创建成功";
}else{
	echo "数据库创建失败";
}

?>