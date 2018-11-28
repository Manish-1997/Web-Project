<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
	<link rel="stylesheet" href="index3.css">
	<title>HOME</title>
</head>
<body>
	<div class="section">

        

        <div class="video-container">
            
            <video autoplay loop muted  poster="2.jpg">
                <source src="video.mp4" type="video/mp4">
            </video>
        </div>
        <div class="tag"><a href="index.php">Chronicle of <br>Higher Education</a></div>
        
        <div id="alias" class="ali">
        	
        <div class="ass" id="ass"><a href="universities.php"><div class="s">
             <div class="font">Universities</div>
    	</div></a></div>
        <div class="ass2" id="ass2">
        	<a href="javascript:void(0)" onclick="cl()">
        	<div class="s2">
        		<div class="font2">
        			Login
        		</div>
        	</div>


        </a>
    	</div>
        <div class="ass3" id="ass3"><a href="cards.php"><div class="s3"><div class="font3">
        			Student Profile
        		</div></div></a></div>
</div>
        	
            <script type="text/javascript">
	var a=document.getElementById("alias")
	var b=document.getElementById("ass")
	
	function cl(){
	
	a.innerHTML="<form method='POST' action =''><div class='side' id='side'><div class='bg'>	<input type='text' name='Username' placeholder='Username'  id='user'></div><div class='bg1'>	<input type='password' name='password' placeholder='Password' ' id='pass'>	</div><div class='new'><a href='javascript:void(0)' onclick='lu()'>I am new...</a></div><div class='bg2'>	<button name='submit' class='pop'>Login</button></div>	</div></form>"
	}
	function lu(){
		var z=document.getElementById("side")
		z.innerHTML="<form method='POST' action =''><div class='border'></div><div class='wrapper'><div class='sign'><input type='text' placeholder='Name' name='name' id='name'></div><div class='sign1'><input type='text'placeholder='E-Mail Id' name='mail' id='mail'></div><div class='sign2'><input type='text' placeholder='Contact No' name='phone' id='phone'></div><div class='sign3'><input type='text' placeholder='Username' name='uname' id='uname'></div><div class='sign4'><input type='password' placeholder='Password' name='pass' id='password'></div><div class='sign5'><input type='password' placeholder='Confirm Password' name='Cpassword' id='Cpassword'></div><button name='submit1' class='pop1' style='width:100px;'>Register</button></div></form>"
	}
        </script>
        	
    </div>
  <?php
  include "common.php";

if(isset($_POST['submit'])){
{
    session_start();
    $x=$_POST['Username'];
    $y=md5($_POST['password']);
    //$x = stripslashes($x);
    //$y = stripslashes($y);

    $query ="select * from login where password='$y' AND uname='$x'";
    $result=mysqli_query($conn,$query);
     while($row=mysqli_fetch_array($result)){
        $_SESSION['student']=$row['studentsid'];
     }
    $resultCheck = mysqli_num_rows($result);
   
    if ($resultCheck == 1) {
        
        $_SESSION['uname']=$x;
        session_name($_SESSION['uid']);
        
        header("location:/web/add.php");
        exit();
      }
    else{
      $error="Incorrect Username or Password";
      echo '<script>alert("Incorrect Username or Password");</script>';
    }

}

mysqli_close($conn);
header("Cache-Control: private, must-revalidate, max-age=0");
header("Pragma: no-cache");
}
if(isset($_POST['submit1'])){
    $name=$_POST['name'];
     $mail=$_POST['mail'];
      $ph=$_POST['phone'];
       $user=$_POST['uname'];
        $passs=md5($_POST['pass']);
         $cpass=md5($_POST['Cpassword']);
         if($passs==$cpass){
    $query1="INSERT into student (name,email,phone) values ('$name','$mail','$ph')";
    
    
    if(mysqli_query($conn,$query1)){
        $query3="select * from student";
        $res=mysqli_query($conn,$query3);
            while($row=mysqli_fetch_array($res)){
                $d=$row['student_id'];
            }

        $query2="INSERT into login values('$d','$user','$passs')";
        $result3=mysqli_query($conn,$query2);
    }

    session_name($_SESSION['uid']);
        session_start();
    header("location:/web/universities.php");
}
}



?>

</body>
</html>