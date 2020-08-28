<?php	/* 查 */
require('./model/_connect.php');

//书写sql语句
$sql = "SELECT * FROM cart";	/* 查询整个购物车 不需要参数   但是在实际工作中需要参数*/

//执行sql语句
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){	
	$arr = mysqli_fetch_all($result,MYSQL_ASSOC);
	echo json_encode(array("code"=>1,"data"=>$arr));
}else{	
	echo json_encode(array("code"=>0));
}


?>