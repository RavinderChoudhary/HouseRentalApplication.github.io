<?php
      $User_id=$_REQUEST['User_id'];
	  $Username=$_REQUEST['Username'];
	  $Phone=$_REQUEST['Phone'];
	  $Email_id=$_REQUEST['Email_id'];
	  $Address=$_REQUEST['Address'];
	  $Pincode=$_REQUEST['Pincode'];

	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$db="sample";
	$conn=new mysqli($dbhost,$dbuser,$dbpass,$db);
  
  error_reporting(0);       //avoid notices
  $filename1=$_FILES["img1"]["name"];   //image
  $tempname1=$_FILES["img1"]["tmp_name"];
  $img1="room/".$filename1;
  move_uploaded_file($tempname1,$img1);  
   if($img1=="room/"){
	   $img1="room/https://cdn3.iconfinder.com/data/icons/objects/512/gallery_2-256.png";
   }
  
   $filename2=$_FILES["img2"]["name"];   //image
  $tempname2=$_FILES["img2"]["tmp_name"];
  $img2="room/".$filename2;
  move_uploaded_file($tempname2,$img2);  
   if($img2=="room/"){
	   $img2="room/https://cdn3.iconfinder.com/data/icons/objects/512/gallery_2-256.png";
   }
  
   $filename3=$_FILES["img3"]["name"];   //image
  $tempname3=$_FILES["img3"]["tmp_name"];
  $img3="room/".$filename3;
  move_uploaded_file($tempname3,$img3);  
    if($img3=="room/"){
	   $img3="room/https://cdn3.iconfinder.com/data/icons/objects/512/gallery_2-256.png";
   }
  
if(mysqli_connect_error()){
	die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else{
	  
	  
	  $sql="INSERT into sampletable (User_Id,Username,Phone_Number,Email_Id,Address,Pincode,Pic1,Pic2,Pic3)
	    values('$User_id','$Username','$Phone','$Email_id','$Address','$Pincode','$img1','$img2','$img3')"; 
  	
	
	  if($conn->query($sql)){
		    echo "<body style='background-color:#228B22;'>";
	        echo "<div style='height:400px;  width:800px; color:blue; padding-left:40px; margin: 0 auto; font-size:30px; border:5px solid black; background-color:#ADD8E6;'>";
		    echo "<h1 style='text-align:center;'>Successful Submission</h1>"; 
		    echo "<i><a style='color:black;'>User Id : </a></i>".$User_id."<br>";
		    echo "<i><a style='color:black;'>Username : </a></i>".$Username."<br>";
		    echo "<i><a style='color:black;'>Phone Number : </a></i>".$Phone."<br>";
		    echo "<i><a style='color:black;'>Email Id : </a></i>".$Email_id."<br>";
		    echo "<i><a style='color:black;'>Address : </a></i>".$Address."<br>";
		    echo "<i><a style='color:black;'>Pincode : </a></i>".$Pincode."<br>";
			echo "</div>";
			echo "<div style='background-color:green; position:absolute;left:0px; bottom:0px; width:100%; height:300px;'>";
			echo "<object data='".$img1."' width='33%' height='300'>";
            echo "<img src='https://cdn3.iconfinder.com/data/icons/objects/512/gallery_2-256.png' alt='Error' width='33.1%' height='300' style='padding: 0px 0 0 0px;' >";
            echo "</object>";
			echo "<object data='".$img2."' width='33%' height='300'>";
			echo "<img src='https://cdn3.iconfinder.com/data/icons/objects/512/gallery_2-256.png' alt='Error' height='300' width='33.2%' style='padding: 0px 0 0 0px;'/>";
			echo "</object>";
			echo "<object data='".$img3."' width='33%' height='300'>";
			echo "<img src='https://cdn3.iconfinder.com/data/icons/objects/512/gallery_2-256.png' alt='Error' height='300' width='33.1%' style='padding: 0px 0 0 0px;'/>";
			echo "</object>";
			echo "</div>";
            echo "</body>";        
		}
	  else {
		    echo "Error".$sql."<br>".$conn->error;
	    }
      $conn->close();
}	  


?>