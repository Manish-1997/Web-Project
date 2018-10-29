<!DOCTYPE html>
<html>
<head>
	<title>Universities</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Patrick+Hand|Permanent+Marker" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Charmonman" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="u4.css">
	<script>
// When the user scrolls down 50px from the top of the document, resize the header's font size
var div;
window.onscroll = function() {scrollFunction()};
function doot(){
          var div1 = document.getElementById("mba").scrollTop;
          div=div1;
}

function scrollFunction1() {
	
	
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    	
        document.getElementById("ms").style.fontSize = "50px";
        
        
    } else if(document.body.scrollTop < 50 || document.documentElement.scrollTop < 50){
       document.getElementById("ms").style.fontSize = "90px";
        
    }
}
function scrollFunction() {
	if(document.body.scrollTop > 2060 || document.documentElement.scrollTop > 2060){
		document.getElementById("iit").style.position="fixed";
		document.getElementById("iit").style.fontSize = "50px";
	}
	
	else if((document.body.scrollTop > 1060 || document.documentElement.scrollTop > 1060)&&(document.body.scrollTop < 2060 || document.documentElement.scrollTop < 2060)){
		document.getElementById("mba").style.position="fixed"
		document.getElementById("mba").style.fontSize = "50px";
		document.getElementById("iit").style.position="relative";
		document.getElementById("iit").style.fontSize = "90px";


	}
    else if ((document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) && (document.body.scrollTop < 1060 || document.documentElement.scrollTop < 1060)) {
    	document.getElementById("mba").style.position="relative"
        document.getElementById("ms").style.fontSize = "50px";
        document.getElementById("mba").style.fontSize = "90px";
        
    } else if(document.body.scrollTop < 50 || document.documentElement.scrollTop < 50){
       document.getElementById("ms").style.fontSize = "90px";
        
    }
}
</script>
	
</head>
<body>
<div class="ms" id="ms">
	Top MS Universities
</div>

<div class="wrapper">
<?php
include "common.php";
$a="SELECT * FROM university,course where university.uid=course.uid and course.course='MS' limit 4";
$res=mysqli_query($conn,$a);
while($row=mysqli_fetch_array($res)){?>
	<div class="imagess">
		<?php
	echo '<a  target="_blank" href="'.$row['url'].'" ><img src="data:image/jpeg;base64,'.base64_encode($row['pic']).'"/>';
	$p=$row['uid'];
	echo '<h1 class="aaa">'.$row['uname'].' </h1><h1 class="coun">Country : '.$row['country'].'<br><br>Exam : '.$row['exam'].'<br><br>CutOff : '.$row['cutoff'].'</h1><br><h2 class="ava">Courses Available :</h2>';
	$b="SELECT * FROM combine,specialisation where combine.uid = '".$p."' and combine.sid=specialisation.sid";
	$result=mysqli_query($conn,$b);
	$i=0;
	while($roo=mysqli_fetch_assoc($result)){

		echo '<h2 class="a'.$i.'">* '.$roo['sname'].'</h2>';
		$i+=1;
	}
	?>
	</div>
	<?php
}
?>
</a>
</div>








<div class="mba" id="mba" onscroll="doot()">
	Top MBA Universities
</div>
<div class="wrapper1">
<?php
include "common.php";
$a="SELECT * FROM university,course where university.uid=course.uid and course.course='MBA' limit 4";
$res=mysqli_query($conn,$a);
while($row=mysqli_fetch_array($res)){?>
	<div class="imagess">
		<?php
	echo '<a  target="_blank" href="'.$row['url'].'" ><img src="data:image/jpeg;base64,'.base64_encode($row['pic']).'"/>';
	$p=$row['uid'];
	echo '<h1 class="aaa">'.$row['uname'].' </h1><h1 class="coun">Country : '.$row['country'].'<br><br>Exam : '.$row['exam'].'<br><br>CutOff : '.$row['cutoff'].'</h1><br><h2 class="ava">Courses Available :</h2>';
	$b="SELECT * FROM combine,specialisation where combine.uid = '".$p."' and combine.sid=specialisation.sid";
	$result=mysqli_query($conn,$b);
	$i=0;
	while($roo=mysqli_fetch_assoc($result)){

		echo '<h2 class="a'.$i.'">* '.$roo['sname'].'</h2>';
		$i+=1;
	}
	?>
	</div>
	<?php
}
?>
</a>
</div>




<div class="iit" id="iit" onscroll="doot()">
	Top M.Tech Universities
</div>
<div class="wrapper1">
<?php
include "common.php";
$a="SELECT * FROM university,course where university.uid=course.uid and course.course='M.Tech' limit 4";
$res=mysqli_query($conn,$a);
while($row=mysqli_fetch_array($res)){?>
	<div class="imagess">
		<?php
	echo '<a  target="_blank" href="'.$row['url'].'" ><img src="data:image/jpeg;base64,'.base64_encode($row['pic']).'"/>';
	$p=$row['uid'];
	echo '<h1 class="aaa">'.$row['uname'].' </h1><h1 class="coun">Country : '.$row['country'].'<br><br>Exam : '.$row['exam'].'<br><br>CutOff : '.$row['cutoff'].'</h1><br><h2 class="ava">Courses Available :</h2>';
	$b="SELECT * FROM combine,specialisation where combine.uid = '".$p."' and combine.sid=specialisation.sid";
	$result=mysqli_query($conn,$b);
	$i=0;
	while($roo=mysqli_fetch_assoc($result)){

		echo '<h2 class="a'.$i.'">* '.$roo['sname'].'</h2>';
		$i+=1;
	}
	?>
	</div>
	<?php
}
?>
</a>
</div>

</body>
</html>