<?php
require('./_connect.php');   /* 一创建就可以链接数据库 */

//书写sql语句
$sql = "CREATE TABLE cart (  /* 创建一个表  表名叫cart */
			product_id VARCHAR(300) NOT NULL PRIMARY KEY,     /* 商品的id */
			product_name VARCHAR(300) NOT NULL,			/* 商品的名字 */
			product_img VARCHAR(30) NOT NULL,		/* 商品的图标 */
			product_price VARCHAR(30) NOT NULL,		/* 商品的价格 */
			product_num VARCHAR(30) NOT NULL,		/* 商品的数量 */
			submission_date TIMESTAMP				/* 提交商品的时间 */
)";
$result = mysqli_query($conn,$sql);
if($result){
	echo "数据表创建成功";
}else{
	echo "数据表创建失败";
}

?>