<!DOCTYPE HTML>
<html lang ="en">
    <head>
        <meta charset="UTF-8">
        <title>My web</title> 
    </head>
    
    <body>
        <div id="zhanghao">
        <h1>账号登录</h1>
           
        
        
        </div>
        
        <div id="data">
        <form method="POST" action ="login.php" >
            <div>
                <label>名字</label>
              <input class = "dataone" type= "text" name="name" required>
            </div>
            <div>
                <label>邮箱</label>
                <input class = "dataone" type="text" name="email" required>
            </div>
            
             <div>
                <label>密码</label>
                <input class = "dataone" type="text" name="password" required>
            </div>
            
            <input class="datatwo" type="submit" value="登录" > 
         
            <a href="phpone.php"><input class="datathree" type="button"value = "注册"></a>
            
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
    
    #zhanghao{
        
       margin-top: -100px;   
     color: darkslateblue; 
        
    }
  
  .dataone{
    
   width:200px;
   
    
    
    
  }
    
    .datatwo{
         margin-right: 50px;
        
        
    }
    .datathree{
         margin-right: 50px;
        margin-bottom:-50px;
        
        
    }

</style>