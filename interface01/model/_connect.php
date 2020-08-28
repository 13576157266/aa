<?php		/* 公共的可以链接数据库 */

header('content-type:text/html;charset=utf8');		/* 解决中文显示问题 */

$servername = "localhost";		/* 数据库地址 */
$username = "root";				/* 用户名 */
$password = "root";				/* 密码 */
$dbname = "shop";				/* 库名 */

//创建连接
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(mysqli_connect_error()){			/* error：错误 */
	die('连接失败');
}

?>