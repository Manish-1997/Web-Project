<?php
include "common.php";
session_start();

?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="cards2.css">
</head>
<body>
<div class='para'>
  <div class="sec"><h1>MS Students</h1></div>

<?php
$a="SELECT * FROM student where course='MS'";
$res=mysqli_query($conn,$a);
while($row=mysqli_fetch_array($res)){
?>

<div class="card"><a href="#"><?php
  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" alt="John" style="width:100%">';
  ?>
</a>
  <a href="#" class="a"><?php echo $row['name']; ?></a>
  <p class="title"><?php echo $row['specialisation']; ?></p>
  <p class='universities'><?php echo $row['universities']; ?></p>
  <div class="sym" style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
 <button>Contact</button>
</div>
<?php
}
?>
</div>
<div class="inter"><h1>MBA Students</h1></div>
<div class="paralla">
<?php
$a="SELECT * FROM student where course='MBA'";
$res=mysqli_query($conn,$a);
while($row=mysqli_fetch_array($res)){
?>

<div class="card"><a href="#"><?php
  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" alt="John" style="width:100%">';
  ?>
</a>
  <a href="#" class="a"><?php echo $row['name']; ?></a>
  <p class="title"><?php echo $row['specialisation']; ?></p>
  <p class='universities'><?php echo $row['universities']; ?></p>
  <div class="sym" style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
 <button>Contact</button>
</div>
<?php
}
?>


  </div>
<div class="inter"><h1>M.Tech Students</h1></div>
<div class="parallax">
<?php
$a="SELECT * FROM student where course='M.Tech'";
$res=mysqli_query($conn,$a);
while($row=mysqli_fetch_array($res)){
?>

<div class="card"><a href="#"><?php
  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" alt="John" style="width:100%">';
  ?>
</a>
  <a href="#" class="a"><?php echo $row['name']; ?></a>
  <p class="title"><?php echo $row['specialisation']; ?></p>
  <p class='universities'><?php echo $row['universities']; ?></p>
  <div class="sym" style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
 <button>Contact</button>
</div>
<?php
}
?>
</body>
</html>