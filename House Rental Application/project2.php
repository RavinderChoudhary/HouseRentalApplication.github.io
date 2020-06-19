             
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title> HOUSE RENTAL APPLICATION </title>
  <style>
     .container {
  position: relative;
  
  width: 600px;
  height: 1300px;
   margin-left:200px; 
   margin-right:200px;
   margin-top:200px;
   margin-bottom:200px;
   background-color:#007770;
}

.form1{
     margin-top:300px;
     position: absolute;
	 width: 80%;
     color: #999;
	 padding-top:1px;
	 font-size:18px;
}

img {
  position: absolute;
  width: 1100px;
  height: 1300px;
  
}

.title {
  position: absolute;
  width: 500px;
  left: 300px;
  top: 230px;
   font-weight: 700; 
   font-size: 30px;
  text-align: center;
  color: white;
  z-index: 1;
  transition: top .5s ease;
  font-family: Cursive;
font-size: 40px;
font-style: normal;
font-weight: bold;
text-decoration: none;
text-transform : normal;
color: #00ff40;

}


#file1{
  background-image:url("https://image.flaticon.com/icons/svg/148/148711.svg" );
  background-repeat:no-repeat;
  background-size:300px 300px;
  z-index:120;
}

#r{
   background-color:blue;
   z-index:125;
}
 #but {
   position:absolute;
   margin-top:80px;
   left:135px;
}


body {
  background-image: url("http://clipart-library.com/images/pki8zz5cr.jpg");
  background-repeat:no-repeat;
  background-size:cover;
}
}
 
  </style>
 <style>


.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-x: hidden;
  transition: 0.5s;
  //z-index:200;
}


.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}

.form-div{
  margin-top:100px;
}
#f1,#f2,#f3{
 display:none;
}
.input-label{
 text-align:center;
 width:400px;
 font-size:25px;
 background:#009688;
 color:#fff;
 padding:30px;
 transition:0.3s;
}
.input-label:hover{
 background:#26a69a;
 curser:pointer;
}

#d1{
 position:absolute;
 top:50px;
 left:50px;
}
#d2{
 position:absolute;
 top:50px;
 left:550px;
}
#d3{
 position:absolute;
 top:50px;
 left:1050px;
}
#d4,#d5,#d6{
	height:400px;
	width:400px;
	border: 5px solid blue;
    border-radius: 5px;
	position:absolute;
	background:#009688;
	transition:0.3s;
}
#d4{
	left:50px;
	top:350px;
}
#d5{
	left:550px;
	top:350px;
}
#d6{
	left:1050px;
	top:350px;
}
#i1,#i2,#i3{
	height:30px;
	width:30px;
	left:55px;
	top:36px;
}
#d4:hover,#d5:hover,#d6:hover{
	background:#009655;
}
</style> 
		
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 
 </head>
<body > 
   
	<div class="container">
	    <img src="https://cdn.pixabay.com/photo/2017/01/26/14/46/alphabet-2010743__340.png" id="i4">
       <!--<img src="http://clipart-library.com/images/pki8zz5cr.jpg" alt="" />-->
       <p class="title"><u><b><em>Renting Form</em></b></u></p>
	     <div class="col-lg-7 m-auto d-block">
		    <form action="add_to_database_sample.php" method="post" enctype="multipart/form-data" onsubmit="return validation()" class="form1">
                <div class="form-group" id="div3">
				   <label id="l1" style="color:#f2f2e4;  font-family:vedana;"> User Id: </label>
				   <input type="text" name="User_id" class="form-control" id="user_id" autocomplete="off">
				    <span id="s1" class="text-danger font-weight-bold"></span>
				</div>
				 <div class="form-group">
				   <label  style="color:#f2f2e4;  font-family:vedana;"> Username: </label>
				   <input type="text" name="Username" class="form-control" id="username" autocomplete="off">
				   <span id="s2" class="text-danger font-weight-bold"></span>
				</div>
				<div class="form-group">
				   <label  style="color:#f2f2e4;  font-family:vedana;"> Phone Number: </label>
				   <input type="text" name="Phone" class="form-control" id="phone" autocomplete="off">
				    <span id="s3" class="text-danger font-weight-bold"></span>
				</div>
				<div class="form-group">
				   <label  style="color:#f2f2e4;  font-family:vedana;"> Email Id: </label>
				   <input type="text" name="Email_id" class="form-control" id="email" autocomplete="off">
				    <span id="s4" class="text-danger font-weight-bold"></span>
				</div>
				<div class="form-group">
				   <label  style="color:#f2f2e4;  font-family:vedana;"> Address: </label>
				   <input type="text" name="Address" class="form-control" id="address" autocomplete="off">
				    <span id="s5" class="text-danger font-weight-bold"></span>
				</div>
				<div class="form-group">
				   <label  style="color:#f2f2e4;  font-family:vedana;"> Pincode: </label>
				   <input type="text" name="Pincode" class="form-control" id="pincode" autocomplete="off">
				    <span id="s6" class="text-danger font-weight-bold"></span>
				</div> 
	
				<div class="form-group">
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
     <h2 style="color:blue; text-align:center;margin:20px;">Select Favourite Image</h2>
   <div class="form-div" id="d1">
     
	   <label for="f1" class="input-label">
	   <img src="https://image.flaticon.com/icons/png/128/25/25635.png" id="i1"><span id="is1">&nbsp Select First Image</span></label><input type="file" id="f1" name="img1"  "/>
	 
	  
	</div>
    <div class="form-div" id="d2">
     
	   <label for="f2" class="input-label">
	   <img src="https://image.flaticon.com/icons/png/128/25/25635.png" id="i2"><span id="is2">&nbsp Select Second Image</span></label><input type="file" id="f2" name="img2" value=""/>
	 
	 </div>
     <div class="form-div" id="d3">
       <label for="f3" class="input-label">
	   <img src="https://image.flaticon.com/icons/png/128/25/25635.png" id="i3"><span id="is3">&nbsp Select Third Image</span></label><input type="file" id="f3" name="img3" value=""/>
	  </div>

	<input type="image" src="https://png.pngtree.com/svg/20170218/icon_face_ok_784312.png" id="ib1" style="width:400px; height:400px; position:absolute;left:50px;top:320px; visibility:hidden;"/>
    <input type="image" src="https://png.pngtree.com/svg/20170218/icon_face_ok_784312.png" id="ib2" style="width:400px; height:400px; position:absolute;left:560px;top:320px; visibility:hidden;" />
	<input type="image" src="https://png.pngtree.com/svg/20170218/icon_face_ok_784312.png" id="ib3" style="width:400px; height:400px; position:absolute;left:1050px;top:320px; visibility:hidden;" />
 </div>
</div>

<span style="font-size:30px;color:#f2f2e4;font-family:vedana;cursor:pointer" onclick="openNav()">&#9776; Add Images</span>
</div>

 <br>
<input type="submit" name="submit"  value="Submit" class="btn btn-success" style="font-size:25px; padding-left:55px; padding-right:55px;"/>
  

<script>

$(document).ready(function(){
	$("#f1").on("change",function(e){
		var files=$(this)[0].files;
		if(files.length >= 2){
			$("#is1").text(files.length+"files ready to upload");
		}
		else
		{
			var filename=e.target.value.split('\\').pop();
			$("#is1").text(filename);
			document.getElementById("ib1").style.visibility="visible";
		}
	});
});				
$(document).ready(function(){
	$("#f2").on("change",function(e){
		var files=$(this)[0].files;
		if(files.length >= 2){
			$("#is2").text(files.length+"files ready to upload");
		}
		else
		{
			var filename=e.target.value.split('\\').pop();
			$("#is2").text(filename);
			document.getElementById("ib2").style.visibility="visible";
		}
	});
});
$(document).ready(function(){
	$("#f3").on("change",function(e){
		var files=$(this)[0].files;
		if(files.length >= 2){
			$("#is3").text(files.length+"files ready to upload");
		}
		else
		{
			var filename=e.target.value.split('\\').pop();
			$("#is3").text(filename);
			document.getElementById("ib3").style.visibility="visible";
		}
	});
});


function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
				<script>
				              
	                    
				    function validation(){
					  var user_id=document.getElementById("user_id").value;
					  var username=document.getElementById("username").value;
					  var phone=document.getElementById("phone").value;
					  var email=document.getElementById("email").value;
					  var address=document.getElementById("address").value;
					  var pincode=document.getElementById("pincode").value;
					   if(user_id==""){
					     document.getElementById("s1").innerHTML="**Please fill the UserId field";//1
						 return false;
					   }
					   if(user_id.length<=4 || user_id.length>10){
					     document.getElementById("s1").innerHTML="**Length must be between 5 and 10";
						 return false;
					   }
					    if(!(user_id==""&&(user_id.length<=4 || user_id.length>10))){
					     document.getElementById("s1").innerHTML="";
					   }
					   if(username==""){
					     document.getElementById("s2").innerHTML="**Please fill the UserName field";//2
						 return false;
					   }
					    if(username.length<=2 || username.length>20){
					     document.getElementById("s2").innerHTML="**Length must be between 3 and 20";
						 return false;
					   }
					   if(!isNaN(username)){
					     document.getElementById("s2").innerHTML="**Only character are allowed";
						 return false; 
					   }
					    if(!(username==""&& (username.length<=2 || username.length>20) && !isNaN(username))){
						document.getElementById("s2").innerHTML=""; }
					   if(phone==""){
					     document.getElementById("s3").innerHTML="Please fill the Phone field";//3
						 return false;
					   }
					   if(isNaN(phone)){
					     document.getElementById("s3").innerHTML="**User must write digits only not characters";
						 return false; 
					   }
					   if(phone.length>15){
					     document.getElementById("s3").innerHTML="**User must write digits of number less than 16";
						 return false; 
					   }
					   if(!(phone=="" && isNaN(phone) && phone.length>15)){
					     document.getElementById("s3").innerHTML="";
					   }
					   var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                       if ((mailformat.test(email) == false)&& !(email=="")){
					     document.getElementById("s4").innerHTML="Please fill the valid Email Address";
						 return false;
					   }
					   else {
					   document.getElementById("s4").innerHTML="";
					   }
					   if(address==""){
					     document.getElementById("s5").innerHTML="Please fill the Address field";//5
						 return false;
					   }
					    else{
						 document.getElementById("s5").innerHTML="";
						}
					   if(pincode==""){
					     document.getElementById("s6").innerHTML="Please fill the Pincode field";//6
						 return false;
					   }
					   if(isNaN(pincode)){
					     document.getElementById("s6").innerHTML="**User must write digits only not characters";
						 return false; 
					   }
					   if(pincode.length!=6){
					     document.getElementById("s6").innerHTML="**Pincode must contain 6 digits of number";
						 return false; 
					   }
					   if(!(pincode=="" && isNaN(pincode) && pincode.length!=6)){
					     document.getElementById("s6").innerHTML="";
					   }
					}
				</script>


          </form>
     </div>
 </div>
</body>
</html>
