<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
	<link rel="stylesheet" href="index2.css">
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
        	
        <div class="ass" id="ass"><a href="p.php"><div class="s">
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
        <div class="ass3" id="ass3"><a href="google.com"><div class="s3"><div class="font3">
        			Student Profiles
        		</div></div></a></div>
</div>
        	<script type="text/javascript">
	var a=document.getElementById("alias")
	var b=document.getElementById("ass")
	
	function cl(){
	
	a.innerHTML="<div class='side' id='side'><div class='bg'>	<input type='text' name='Username' placeholder='Username'  id='user'></div><div class='bg1'>	<input type='text' name='password' placeholder='Password' ' id='pass'>	</div><div class='new'><a href='javascript:void(0)' onclick='lu()'>I am new...</a></div><div class='bg2'>	<a href='' class='pop'>Login</a></div>	</div>"
	}
	function lu(){
		var z=document.getElementById("side")
		z.innerHTML="<div class='border'></div><div class='wrapper'><div class='sign'><input type='text' placeholder='Name' name='name' id='name'></div><div class='sign1'><input type='text'placeholder='E-Mail Id' name='mail' id='mail'></div><div class='sign2'><input type='text' placeholder='Contact No' name='phone' id='phone'></div><div class='sign3'><input type='text' placeholder='Username' name='uname' id='uname'></div><div class='sign4'><input type='text' placeholder='Password' name='password' id='password'></div><div class='sign5'><input type='text' placeholder='Confirm Password' name='Cpassword' id='Cpassword'></div><a href='' class='pop1'>Register</a></div>"
	}
</script>
        	
    </div>
  
</body>
</html>