<?php     /* 增 */
require('./model/_connect.php');
//获取前端的参数
$id = $_REQUEST['id'];//商品id
$name = $_REQUEST['name'];//商品名字
$img = $_REQUEST['img'];//商品图片
$price = $_REQUEST['price'];//商品价格
$num = $_REQUEST['num'];//商品数量
//根据前端参数插入数据
$sql = "SELECT * FROM `cart` WHERE `product_id`='$id'";		//去数据库查询一下   		选了VARCHAR  id后面都要打引号
$res = mysqli_query($conn,$sql);	/* 查询 */
$rows = mysqli_num_rows($res);//mysqli_num_rows方法是统计查询结果有几行
if($rows>0){
	$row = mysqli_fetch_assoc($res);//获取当前行数据,转成php数组
	$num = $row['product_num']+$num;	//拿到数组里面product_num  +$num 你要几个给你加几个
	$sql = "UPDATE `cart` SET `product_num`='$num' WHERE `product_id`='$id'";	/* 更新一下product_num   变成新的$num就可以了  */
}else{
	$sql = "INSERT INTO `cart` (`product_id`,`product_img`,`product_name`,`product_num`,`product_price`) VALUES ('$id','$img','$name','$num','$price')";
}

$result = mysqli_query($conn,$sql);	//返回结果
if($result){
	echo json_encode(array("code"=>1));	//结果为1  表示成功
}else{
	echo json_encode(array("code"=>0));	//结果为0	表示失败
}

?>