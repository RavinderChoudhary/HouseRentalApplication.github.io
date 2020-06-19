<?php 
 
$host="localhost";
$user="root";
$password="";
$db="sample";
 
$conn=new mysqli($host,$user,$password,$db); 

if(isset($_POST['submit']))
{
$uname=$_POST['text'];
$password=$_POST['password'];
$sql="select * from login_table where username = '".$uname."' AND password = '".$password."' limit 1";
$result=$conn->query($sql);

if($result-> num_rows == 1){ 
  header('location: http://localhost/New%20folder/Project/project3.php');
  exit();
}
else{
  echo " You Have Entered Incorrect Password";
  header('location: http://localhost/New%20folder/Project/login.php');
  exit();
}
}

?>

<html>
<head>
 <title> Login Form </title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <style>

body{
 margin: 0 auto;
 background-image: url("https://i.pinimg.com/originals/46/cb/ae/46cbaef61fee8c95ae6a4f5170779070.jpg");
 background-repeat: no-repeat;
 background-size: 100% 820px;
}
 
.container{
 width: 600px;
 height: 500px;
 text-align: center;
 margin: 0 auto;
 background-color: #42c7c0;
 margin-top: 160px;
}
 
.container img{
 width: 150px;
 height: 150px;
 margin-top: 60px;
}
 
input[type="text"]{
 margin-top: 40px;
 height: 45px;
 width: 300px;
 font-size: 18px;
 background-color: #fff;
 padding-left: 40px;
}
 
 input[type="password"]{
 margin-top: 40px;
 height: 45px;
 width: 300px;
 font-size: 18px;
 margin-bottom: 10px;
 background-color: #fff;
 padding-left: 40px;
}
 
.form-input::before{
 content: "\f007";
 font-family: "FontAwesome";
 padding-left: 07px;
 padding-top: 43px;
 padding-bottom : 2px;
 position: absolute;
 font-size: 35px;
 color: #254252; 
}
 
.form-input:nth-child(2)::before{
 content: "\f023";
}

 
.btn-login{
 margin-top : 10px;
 font-family:vedana;
 font-size:40px;
 padding-left:55px; 
 padding-right:55px;
 border-radius: 20%;
 background-color: #573c8c;
 color: #fff;
}
 </style>
</head>
<body>
 <div class="container">
 <img style = "border-radius: 50%;" src="https://www.w3schools.com/howto/img_avatar.png"/>
 <form method = "POST" action = "<?php $_PHP_SELF ?>">
   <div class="form-input" >
     <input type="text" name="text" placeholder="User Name"/> 
   </div>
   <div class="form-input">
      <input type="password" name="password" placeholder="password"/>
   </div>
   <input type="submit" name="submit" value="Login" class="btn-login"/>
 </form>
 </div>
</body>
</html>