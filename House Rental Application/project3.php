<!DOCTYPE html>
<html>
 <head>
 
   <title> HOUSE RENTAL APPLICATION </title>
<style>
  table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #135626;
  color: white;
}


.header {
  padding: 40px;
  text-align: center;
  background: #6e3fb0;
  color: white;
  font-size: 40px;
  margin : 0;
}
</style>
 </head>
 <body>
  <div class="header">
  <b> Users Information </b>
  </div>
  <table>
    <tr>
	  <th>User Id</th>
	  <th>Username</th>
	  <th>Phone Number</th>
	  <th>Email Id</th>
	  <th>Address</th>
	  <th>Pincode</th>
	</tr>
<?php
   $dbhost="localhost";
   $dbuser="root";
   $dbpass="";
   $db="sample";
   $conn=new mysqli($dbhost,$dbuser,$dbpass,$db);
   if($conn->connect_error){
     die("Connection failed:".$conn->connect_error);
   }
   
   $sql= "SELECT User_Id,Username,Phone_Number,Email_Id,Address,Pincode from sampletable";
   
   $result=$conn->query($sql);
   if($result-> num_rows>0){
     while($row=$result-> fetch_assoc()){
	   echo "<tr>
	     <td>".$row["User_Id"]."</td>
		 <td>".$row["Username"]."</td>
		 <td>".$row["Phone_Number"]."</td>
		 <td>".$row["Email_Id"]."</td>
		 <td>".$row["Address"]."</td>
		 <td>".$row["Pincode"]."</td>
		 </tr>";
	 }
	 echo "</table>";
   }
   else{
     echo "0 result";
   }
   $conn->close();
?>
  </table>
 </body>
</html>
<!-- important question https://www.wisdomjobs.com/e-university/data-structures-interview-questions.html  -->