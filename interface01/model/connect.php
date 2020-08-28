<?php		/* 链接数据库 但是没有库名   因为最开始没有库 */

header('content-type:text/html;charset=utf8');

$servername = "localhost";
$username = "root";
$password = "root";

//创建连接
$conn = mysqli_connect($servername,$username,$password);
if(mysqli_connect_error()){
	die('连接失败');
}

?>