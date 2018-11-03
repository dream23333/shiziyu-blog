
<?php


 $name = $_POST["name"];
 $email = $_POST["email"];
 $password = $_POST["password"];


$mysqli = new mysqli("localhost","root","","user");

if ($mysqli->connect_errno){
    
    die($mysqli->connect_error);
    
}

$result = $mysqli->query("INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES (NULL, '$name', '$email', '$password')");

if ($result){
    
   echo "注册成功";
   
    
}else{
    
    echo "注册失败";
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