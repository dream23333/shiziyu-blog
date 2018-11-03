

   <?php

session_start();
if($_SESSION['name']==""){
    
    
    echo "非法登录，你无权查看";
    exit();
}else

echo "";

  ?>

<!doctype html>

<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>My photos</title>
		
		<meta name="author" content="Ellick">
		<meta name="robots" content="index, follow">
	</head>

	<body>
		<div id="bigcontainer">
			<div id="header">
				
                <h1>我的私人相册</h1>
			</div>
			
			<div id="gallerymenu">
				
				<br>
				<table>
				    <tr>
						<td><a href="#hah1"><img src="image/shi/WechatIMG224.jpeg" height="96"></a></td>
						<td><a href="#hah2"><img src="image/shi/WechatIMG43.jpeg" height="96" ></a></td>
						<td><a href="#hah3"><img src="image/shi/WechatIMG44.jpeg" height="96" ></a></td>
						<td><a href="#hah4"><img src="image/shi/WechatIMG46.jpeg" height="96"></a></td>
						<td><a href="#hah5"><img src="image/shi/WechatIMG48.jpeg" height="96" width="128"></a></td>
                        <td><a href="#hah6"><img src="image/shi/WechatIMG49.jpeg" height="96" width="128"></a></td>
                        <td><a href="#hah7"><img src="image/shi/WechatIMG52.jpeg" height="96" width="128"></a></td>
                        <td><a href="#hah8"><img src="image/shi/WechatIMG53.jpeg" height="96" width="128"></a></td>
                        <td><a href="#hah9"><img src="image/shi/WechatIMG54.jpeg" height="96" width="128"></a></td>
					</tr>
				</table>
			</div>
		
			<div id="main">
				<img id="hah1" src="image/shi/WechatIMG224.jpeg"  height="400" width="400">
                <img id="hah2" src="image/shi/WechatIMG43.jpeg" height="400" width="400">
                <img id="hah3" src="image/shi/WechatIMG44.jpeg"  height="400" width="400">
                <img id="hah4" src="image/shi/WechatIMG46.jpeg" height="400" width="400">
                <img id="hah5" src="image/shi/WechatIMG48.jpeg" height="400" width="400">
                <img id="hah6" src="image/shi/WechatIMG49.jpeg"  height="400" width="400">
                <img id="hah7" src="image/shi/WechatIMG52.jpeg"   height="400" width="400">
                <img id="hah8" src="image/shi/WechatIMG53.jpeg"  height="400" width="400">
                <img id="hah9" src="image/shi/WechatIMG54.jpeg"  height="400" width="400">
			</div>
		
			<div id="footer">
				<hr>
				<p>&copy; 2016 My photos</p>
				<br>
			</div>
			
		</div>
	</body>

</html>

<style type="text/css">
/*created by Ellick*/
body
	{
		background-color:#FFB6C1; /*temp*/
		 background-image: url("image/2010042516582465.jpg");
		/*background-repeat:no-repeat;
		background-position:centre-right;*/
		font-family:Batang, Century, Times New Roman, serif;
		background-attachment:fixed;
		font-size:12pt;
		color:#ffffff;
		text-align:justify;
		
		
	}
       
	
#bigcontainer
	{
	 background-color: azure;
		width:780px;
		margin-left:auto;
		margin-right:auto;
	}
	
#header
	{
        background-color: azure;
        color: brown;
		width:780px;
		height:50px;
        text-align: center;
		
		
	}
	


	
/*experiment float
#main3 img
	{
		display:block;
		float:left;
		margin-right:20px;
	
	}
	*/



#footer
	{
		height:40px;
		padding-top:20px;
		padding-bottom:20px;
		padding-left:250px;
		padding-right:250px;
		clear:both;
        color: brown;
	}
#footer img
	{
		vertical-align:middle;
	}
	
span
	{
		color:#7FA500;
		font-weight:bold;
	}

h2
	{
		font-size:20pt;
		text-align:center;
		
	
	}
	
h3
	{
		font-size:16pt;
		text-align:left;
		margin-bottom:0px;
	}
	
ul 
	{
	    list-style-type:square;
		margin-top:5px;
		
	}
	
#main4 table
	{
		border-style:solid;
		border-color:#000000;
		border-width:2px;
		border-collapse:collapse;
		margin-left:auto;
		margin-right:auto;
		background-color:#ffffff;
		color:#73182c;
		font-size:14pt;
		font-weight:bold;
		text-align:left;
	}
#main4 td
	{
	
		border-style:solid;
		border-color:#000000;
		border-width:2px;
		padding:10px 5px 10px 5px;
	
	}
	
/*styles for gallery page*/

#gallerymenu
	{
		padding:10px;
        
	
	}
	
#gallerymenu table
	{
		padding-bottom:2px;
		margin-top:2px;
	}
	
#gallerymenu img
	{
		padding-bottom:2px;
		border:1px solid #ffffff;
	}
	

#main
	{
	height:400px;
	overflow:hidden;
    text-align: center;
	
	}
.para
	{
	text-align:center;
	
	}
.xieti
	{
		font-style:italic;

	}
	
.listcircle
	{
		list-style-type:circle;
		list-style-image:url(sunny.png);

	}
	
.sangxinbingkuang
	{
		background-color:#eed6af;
		text-align:right;
	}
.woc
	{
		text-align:center;
		font-size:20pt;
		font-weight:bold;
		background-color:#eed6af;
	}
	
.lianjie
	{
		margin-left:auto;
		margin-right:auto;
		
	
	}
	
a:link
	{
		color:#ffffff;
		text-decoration:none;
	}

a:visited
	{
		color:#000000;
	}	
a:hover
	{	
		color:#7fa500;
		text-decoration:underline;

	}
a:active
	{
		color:#008222;
	}
	
#menu a:hover 
	{	
		color:#00ff00;
		text-decoration:underline;
		
	}
	
#gallerymenu a:hover  img
	{	
		border-color:#ffff00;
        
	}
    #gallerymenu{
        
        
        overflow:scroll;
    }
	
#arrow
	{
	vertical-align:middle;
	}
    
</style>



    <?php
setcookie("firstView","1");



?>