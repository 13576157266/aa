<?php
/* 
 注册
接收POST请求
请求参数username和password
返回结果
    用户名已经被注册，返回{code:0,msg:"用户名已被注册"}
    注册成功：{code:1,data:{username:"lisi"}}
    注册失败：{code:0,msg:"后端出错了"}
*/
//1 接收前端数据
$username = $_POST['username'];
$password = $_POST['password'];

//2 链接数据库
$conn = mysqli_connect('localhost','root','root','denlu');

//3 书写SQL语句
$sql = "SELECT * FROM `zhmm` WHERE `username`='$username' ";

//4 执行sql语句
$result = mysqli_query($conn,$sql);

//5 解析查询结果
$data = mysqli_fetch_assoc($result); 

if($data){
    //如果查询到，说明该用户已存在于数据库，无法注册
    $arr = array('code'=>0,'msg'=>'用户已被注册');
}else{
    //如果没有查询到可以注册
    //书写插入的sql语句
    $sql = "INSERT INTO `zhmm` (`username`,`password`) VALUES ('$username','$password')";

    //执行语句
    $result = mysqli_query($conn,$sql);
    //不需要解析，应为结果是布尔值
    if($result){
        $arr = array('code'=>1,'data'=>array('username'=>$username));
    }else{
        $arr = array('code'=>0,'msg'=>"后端出错了");
    }
}

//6 给前端返回json数据
echo json_encode($arr);

?>