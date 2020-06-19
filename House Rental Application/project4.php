<!DOCTYPE html>
<html>
 <head>
 
   <title> HOUSE RENTAL APPLICATION </title>
   <style>

.flip-box-back{
	display:none;
}
#div1{
	display:block;
}
<!--  gallery -->


</style>
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
}

/* The grid: Four equal columns that floats next to each other */


/* Style the images inside the grid */
* {
  box-sizing: border-box;
}

.column {
  background-color:#56cc62;
}

.column img {
  opacity: 0.8; 
}

.column img:hover {
  opacity: 1;
}



/* The expanding image container */
.container {
  position: absolute;
  display: none;
}


/* Closable button inside the expanded image */
.closebtn {
  position: absolute;
  top: 10px;
  right: 15px;
  color: white;
  font-size: 35px;
  cursor: pointer;
}
</style>
<style>
  
</style>
 <!-- user id -->
<style>
* {
  box-sizing: border-box;
}

.columns {
  float: left;
  width: 20%;
  height:520px;
  padding: 8px;
  position:absolute;
  top:235px;
  left:770px;
  overflow-x:hidden;
  overflow-y:scroll;
}

.price {
  list-style-type: none;
  border: 1px solid #eee;
  margin: 0;
  padding: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
  font-size: 27px;
}

.price:hover {
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

.price .header {
  background-color: #111;
  color: white;
  text-align:left;
  padding-left:40px;
  font-size: 40px;
}

.price button {
  width:100%;
  border-bottom: 1px solid #eee;
  padding: 20px;
  text-align: center;
  font-size:25px;
}

.price li {
  border-bottom: 1px solid #eee;
  padding: 20px;
  text-align: center;
}
</style>
   <!--  invert  -->
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.flip-box {
  background-color:#e9e796;
  position:absolute;
  top:240px;
  left:1060px;
  <!-- background-color: transparent; -->
  width: 400px;
  height: 500px;
  border: 1px solid #f1f1f1;
  perspective: 1000px;
}

.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
}

.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
  background-size:100%;
}

.flip-box-front {
  background-color: #bbb;
  color: black;
}

.flip-box-back {
  background-color: dodgerblue;
  color: white;
  transform: rotateY(180deg);
}
body {
  font-family: Arial;
}
 
.flip-box-back {
  border: 5px dotted #bbb;
  position:relative;
  width: 400px;
  height:500px;
  border-radius: 15px;
  margin: 0 auto;
  max-width: 600px;
  background-color: #09ba38;
  color:#4ae0e8;
}
  
div {
  margin-bottom: 15px;
  padding: 4px 12px;
}

.c1 {
  background-color: #ffdddd;
  border-left: 6px solid #f44336;
}

.c2 {
  background-color: #ddffdd;
  border-left: 6px solid #4CAF50;
}

.c3 {
  background-color: #e7f3fe;
  border-left: 6px solid #2196F3;
}


.c4 {
  background-color: #ffffcc;
  border-left: 6px solid #ffeb3b;
}

.c5 {
  background-color: #ffff82;
  border-left: 6px solid #FF8C00;
}

.header {
  padding: 40px;
  text-align: center;
  background: #1abc9c;
  color: white;
  font-size: 40px;
  margin : 0;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>

		<!-- Latest compiled and minified CSS -->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 </head>
 <body>
  <div class="header">
  <b> Tenant Junction </b>
  </div>
  <div class="topnav">
  <a href="http://localhost/New%20folder/Project/index.html">Home</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  </div>

  <?php
   $dbhost="localhost";
   $dbuser="root";
   $dbpass="";
   $db="sample";
   $conn=new mysqli($dbhost,$dbuser,$dbpass,$db);
   if($conn->connect_error){
     die("Connection failed:".$conn->connect_error);
   }
   $i=1;
   $sql= "SELECT User_Id,Username,Phone_Number,Email_Id,Address,Pincode,Pic1,Pic2,Pic3 from sampletable";
   $result=$conn->query($sql);
   if($result-> num_rows>0){
	 echo "<div class='flip-box'>
        <div class='flip-box-inner'>
        <div class='flip-box-front'>
        <h2 style = 'font-size : 40px; font-family:Courier New; color : #a157de;'><strong>User Details</strong></h2>
		<img style = ' height : 400px; width : 100%;' src='https://cdn.pixabay.com/photo/2017/01/26/14/46/alphabet-2010743__340.png'>
        </div>";
        
     while($row=$result-> fetch_assoc()){
		 
	   echo "<div class='flip-box-back'  id='div".$i."' style='visibility:visible;'>
             <p><strong>".$row["Username"]."  Details</strong></p>";
	   echo "<div class='c1'>
             <p><strong>Username:</strong>".$row["Username"]."</p>
             </div>
		     <div class='c2'>
             <p><strong>Phone Number:</strong>".$row["Phone_Number"]."</p>
             </div>
			 <div class='c3'>
             <p><strong>Email Id:</strong>".$row["Email_Id"]."</p>
             </div>
			 <div class='c4'>
             <p><strong>Address:</strong>".$row["Address"]."</p>
             </div>
			 <div class='c5'>
             <p><strong>Pincode:</strong>".$row["Pincode"]."</p>
             </div>
	         </div>";
			 $i++;
	      }
	  echo  "</div>
	   </div>";
   }
   else{
     echo "0 result";
   }
   $conn->close();
?>
 
<!--  gallery -->  



  <div class="column"   style="margin-left:20px; height:11%;  width:11%;">
    <img src="https://lh3.googleusercontent.com/proxy/TGr6N49Z1lHZ1Uk14Nw-1KVPJuhQghjwS0Txzsihsr6lBy-ChUfYLuozMUxgWE85a2qEkDCpvi_Ng99mkxqy5VeVauBmMvCEthw6ET3TUeprstmr-Ok" id="img1" onclick="myFunction(this);" alt="Img" style="width:150px; height : 150px;">
  </div>
  <div class="column" style="margin-left:20px;  height:11%; width:11%;">
    <img src="https://lh3.googleusercontent.com/proxy/TGr6N49Z1lHZ1Uk14Nw-1KVPJuhQghjwS0Txzsihsr6lBy-ChUfYLuozMUxgWE85a2qEkDCpvi_Ng99mkxqy5VeVauBmMvCEthw6ET3TUeprstmr-Ok" id="img2" onclick="myFunction(this);" alt="Img" style="width:150px; height : 150px;" >
  </div>
  <div class="column" style="margin-left:20px;  height:11%; width:11%;">
    <img src="https://lh3.googleusercontent.com/proxy/TGr6N49Z1lHZ1Uk14Nw-1KVPJuhQghjwS0Txzsihsr6lBy-ChUfYLuozMUxgWE85a2qEkDCpvi_Ng99mkxqy5VeVauBmMvCEthw6ET3TUeprstmr-Ok"id="img3" onclick="myFunction(this);" alt="Img" style="width:150px; height : 150px;">
  </div>

<div class="container" style="height:470px; width:30%; background-color:yellow; margin-left:30px; left : 200px; top : 250px;">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <img id="expandedImg" style="width:100%; ">
</div>



<?php 
   $dbhost="localhost";
   $dbuser="root";
   $dbpass="";
   $db="sample";
   $conn=new mysqli($dbhost,$dbuser,$dbpass,$db);
   if($conn->connect_error){
     die("Connection failed:".$conn->connect_error);
   }
   $x=1;
   $sql= "SELECT User_Id from sampletable";
   $result=$conn->query($sql);
   
   if($result-> num_rows > 0){
	  echo "<input type='image' id='upClick' src='https://www.svgrepo.com/show/175749/double-up-arrow.svg' style='height:30px; width:30px; position:absolute; left:740px; top:465px; z-index:2000;' alt='Loading Error'>"; 
	  echo "<input type='image' id='back' title='Back to Top' src='https://www.parklane.com.hk/images/top-button.png' style='height:50px; width:50px; position:absolute; left:975px; top:250px; z-index:2000; ' alt='Loading Error'>"; 
	  echo "<input type='image' id='downClick' src='https://image.flaticon.com/icons/svg/56/56747.svg' style='height:30px; width:30px; position:absolute; left:740px; top:520px; z-index:2000;' alt='Loading Error'>";
     echo "<div class='columns'><ul class='price'><li class='header' role='group' style='position:relative; height:80px; width:269px;  position: -webkit-sticky; position:sticky; top:-10px;'>User Id</li>";
	 while($row=$result-> fetch_assoc()){
       echo "<button class='but' id='".$x."'  onclick='fun(".$x.")' >".$row["User_Id"]."</button><br>";
	   $x++;
	 }
   echo "</ul>";
   echo "</div>";
	 }
	else{
		   echo "0 result";
   }
   $conn->close();
?>


<script>
	        function myFunction() { 
         let input = document.getElementById('myInput').value; 
         input=input.toLowerCase(); 
         let x = document.getElementsByClassName('but');		 
      
			for (i = 0; i < x.length; i++) {  
				if (!document.getElementsByClassName('but')[i].innerHTML.toLowerCase().includes(input)) { 
					//x[i].style.display="none"; 
					document.getElementsByClassName('but')[i].disabled=false;
				} 
				else { 
					//x[i].style.display="block";  
                    document.getElementsByClassName('but')[i].disabled=true;					
				} 
			  } 
		    }
</script>
<!-- play with button -->

<script>
 
$(function() {
	
   $( "#upClick" ).click(function(){
      $('.columns').scrollTop($('.columns').scrollTop()-210);
   }); 

   $( "#downClick" ).click(function(){
      $('.columns').scrollTop($('.columns').scrollTop()+210);;
   }); 
 
$( "#back" ).click(function(){
     $('.columns').scrollTop(0);
    }); 
   });
 
        var pic1,pic2,pic3;
       function fun(t){
		    if( typeof fun.counter == 'undefined' ) {
				 fun.counter = 0;
				 fun.y = document.getElementById("1");
				 
				 }
				 fun.counter++;
				 
				 
	     //imgSetter(t); 
		 //
		  var Img = document.getElementById("img1");
	      Img.src = "https://architecturesideas.com/wp-content/uploads/2019/02/small-house-design-1.jpg";
	      Img.style.height = '150px';
          Img.style.width = '150px';
	      Img.parentElement.style.display = "block";
		 //
		 //
		  var Img = document.getElementById("img2");
	      Img.src = "https://akm-img-a-in.tosshub.com/indiatoday/styles/photo_slider_753x543/public/images/photogallery/201808/a-14_IT_1534510324658.jpg?oe72Q8v4ZlBmXjJwz1ldaobUipFkYCa4";
	      Img.style.height = '150px';
          Img.style.width = '150px';
	      Img.parentElement.style.display = "block";
		 //
		 //
		  var Img = document.getElementById("img3");
	      Img.src = "https://i.pinimg.com/originals/7e/b8/c2/7eb8c267a4bd0c2571ef599c309df5fc.jpg";
	      Img.style.height = '150px';
          Img.style.width = '150px';
	      Img.parentElement.style.display = "block";
		 //
		 
		 document.getElementById('div'+fun.y.id).style.display = "none";
		 document.getElementById('div'+t).style.display = "block";
		 fun.y= document.getElementById(t);
	    }
	
	function imgSetter(r){
		var javavar;
		 javavar=r;  
		
         //document.getElementById("rslt").innerHTML="<?php $phpvar='"+javavar+"'?>"; 
         
		 pic1 = "<?php  
		        
				   $dbhost='localhost';
				   $dbuser='root';
				   $dbpass='';
				   $db='sample';
				   $conn=new mysqli($dbhost,$dbuser,$dbpass,$db);
				   if($conn->connect_error){
					 die('Connection failed:'.$conn->connect_error);
				   }
				
		        $sql = 'SELECT * from sampletable WHERE number='.$phpvar;
				
				$result=$conn->query($sql);
				while($row=$result-> fetch_assoc()){
				   echo $row['Pic1'];  
				}
				$conn->close();
			
           ?>";
		   
         pic2 = "<?php  
		        
				   $dbhost='localhost';
				   $dbuser='root';
				   $dbpass='';
				   $db='sample';
				   $conn=new mysqli($dbhost,$dbuser,$dbpass,$db);
				   if($conn->connect_error){
					 die('Connection failed:'.$conn->connect_error);
				   }
				
		        $sql = 'SELECT * from sampletable WHERE number='.$phpvar;
				
				$result=$conn->query($sql);
				while($row=$result-> fetch_assoc()){
				   echo $row['Pic2'];  
				}
				$conn->close();
			
           ?>";		   
		   
		 pic3 = "<?php  
		        
				   $dbhost='localhost';
				   $dbuser='root';
				   $dbpass='';
				   $db='sample';
				   $conn=new mysqli($dbhost,$dbuser,$dbpass,$db);
				   if($conn->connect_error){
					 die('Connection failed:'.$conn->connect_error);
				   }
				
				 
		         $v = "<script> document.write(document.getElementById('span_hide').innerHTML) </script>";
				 $phpvar = 2;
                 print "@ " . $phpvar . "<br>";
			
				$sql = 'SELECT * from sampletable WHERE number ='.$phpvar;
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
						echo $row["Pic3"];
					}
				} else {
					echo "0 results";
				}

				mysqli_close($conn);
           ?>";
		 
		 alert(pic3);
         var setpic1 = 'room/'+pic1.split('/').pop();		 
		 var setpic2 = 'room/'+pic2.split('/').pop();
		 var setpic3 = 'room/'+pic3.split('/').pop();
		 
		 document.getElementById("img1").src=setpic1;
		 document.getElementById("img2").src=setpic2;
		 document.getElementById("img3").src=setpic3;
	}
 
  function myFunction(imgs) {
	  var expandImg = document.getElementById("expandedImg");
	  expandImg.src = imgs.src;
	  expandImg.style.height = '100%';
      expandImg.style.width = '100%';
	  expandImg.parentElement.style.display = "block";
   } 
</script> 
 </body>
</html>

