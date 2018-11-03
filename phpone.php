<!DOCTYPE HTML>
<html lang ="en">
    <head>
        <meta charset="UTF-8">
        <title>My web</title> 
    </head>
    
    <body>
         <div id="zhanghao">
        <h1>账号注册</h1>
        
        
        </div>
        <div id="data">
        <form method="POST" action ="registered.php" >
            <div>
                <label>名字</label>
              <input class = "dataone" type= "text" name="name" required >
            </div>
            <div>
                <label>邮箱</label>
                <input class = "dataone" type="text" name="email" required>
            </div>
            
             <div>
                <label>密码</label>
                <input class = "dataone" type="text" name="password" required>
            </div>
            
            <a href="phptwo.php"><input class="datathree" type="button"value = "登录"></a>
            <input type="submit" value="注册"> 
        </form>
            </div>
    </body>

</html>



<?php
if(isset($_POST["email"])){
   if(filter_INPUT(INPUT_POST,'email',FILTER_VALIDATE_EMAIL)){
     echo "邮箱合法";
     echo "<br>";
      $name = $_POST["name"];
     echo $name;
     echo "<br>"; 
      $email = $_POST["email"];
     echo $email;
         echo "<br>";
        $password = $_POST["password"];
     echo $password;
    
       
}else{
    
    echo "邮箱不合法";
}   
}

?>


<style type="text/css">

      body{
        width:1200px;
        height: auto;
        background-color:floralwhite;
        text-align: center;
        margin-top: 200px;
        background-image: url("image/2010042516582465.jpg");
        background-repeat: no-repeat;
        background-size:100%,100%;
        
    }
    #data {
        background-color:aliceblue;
        text-align: right;
        margin-top: 200px;
        margin-right: 50px;
       margin-left: 900px;

    
    }
  
  .dataone{
    
   width:200px;
   
    
    
    
  }
  #zhanghao{
        
       margin-top: -100px;   
     color: darkslateblue; 
        
    }     
        
</style>