<?php
/* 
    接受POST请求
    接受的参数有username和password
    返回数据格式：
        {
            code:1    //1表示成功 0表示失败
            msg:"错误信息"     //msg表示错误信息，如果code是0有这个键值对
            data:{         //data表示登录成功的用户名，如果code是1有这个键值对
                username:"用户名"

            }
        }
 */

 //1 接受前端信息
        $username = $_POST['username'];
        $password = $_POST['password']; 

// 2 链接数据库
        $conn = mysqli_connect('localhost','root','root','denlu');

// 3 书写SQL语句
        $sql = "SELECT * FROM `zhmm` WHERE `username` ='$username' AND `password`='$password' ";
    
//4 执行sql语句
        $result = mysqli_query($conn,$sql);
    
//5 解析结果
        $data = mysqli_fetch_assoc($result);

        if($data){
            $arr = array('code'=>1,'data'=>array('username'=>$username));
        }else{
            $arr = array('code'=>0,'msg'=>'用户名或密码错误');
        }
//6 返回json格式的数据
        echo json_encode($arr);
?>                 