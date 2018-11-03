
<?php


 $name = $_POST["name"];
 $email = $_POST["email"];
 $password = $_POST["password"];


$mysqli = new mysqli("localhost","root","","user");

$sql = "SELECT*FROM user where name = '{$name}'and email ='{$email}'and password='{$password }'";

$result = mysqli_query($mysqli,$sql);

$data = mysqli_fetch_assoc($result);

if($data){
    
    echo "登录成功，请耐心等待3秒";
   header("Refresh:3;url=home.php");  
    
session_start(); 
$user=$_POST['name'];
$password=$_POST['password'];

$_SESSION['name']=$user;
    
}else{
    
    echo "登录失败";
}
$mysqli->close();

?>



<!DOCTYPE HTML>
<html lang ="en">
    <head>
        <meta charset="UTF-8">
        <title>My web</title> 
    </head>
    
    <body>
        <div id="return">
            
          <a href="phptwo.php"><input class="datathree" type="button" value = "返回" style="height:50px;width:100px;" ></a>
        
        
            </div>
    </body>
    
</html>


<style type="text/css">

    body{
        width:1200px;
        height: auto;
        background-color:floralwhite;
        text-align: center;
        margin-top: 200px;
        background-image: url("image/2010042516582465.jpg");
        background-repeat: no-repeat;
        background-size:100%,100%;}
        
        
        .datathree{
            
           margin-top: 100px;
            margin-left: 100px;
            background-color: crimson;
            
        }


</style>
