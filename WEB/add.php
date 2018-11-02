<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Add a new student info</title>
		<meta name="description" content="Fullscreen Form Interface: A distraction-free form concept with fancy animations" />
		<meta name="keywords" content="fullscreen form, css animations, distraction-free, web design" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/cs-select.css" />
		<link rel="stylesheet" type="text/css" href="css/cs-skin-boxes.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">

			<div class="fs-form-wrap" id="fs-form-wrap">
				<div class="fs-title">
					<h1>Stuff about the student</h1>
				</div>
				<form id="myform" class="fs-form fs-form-full" autocomplete="off" enctype="multipart/form-data">
					<ol class="fs-fields">
						<li>
							<label class="fs-field-label fs-anim-upper" for="q1" data-info="Phone and Email will only be visible to admins">Personal details</label>
							<input class="fs-anim-lower" id="q1" name="name" type="text" placeholder="Name" required/>
							<input class="fs-anim-lower" id="q1a" name="email" type="email" placeholder="Email-Id"/>
							<input class="fs-anim-lower" id="q1b" name="phone" type="text" placeholder="Phone Number"/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q2" data-info="The University the student is pursuing Higher studies in">University Details</label>
							<input class="fs-anim-lower" id="q2" name="uni" type="text" placeholder="University/Institution" required/>
							<input class="fs-anim-lower" id="q2a" name="course" type="text" placeholder="Course(MS/MBA etc" required/>
							<input class="fs-anim-lower" id="q2b" name="major" type="text" placeholder="Major" required/>
						</li>
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" for="q3" data-info="More about the student">Miscellaneous Information</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<input class="fs-anim-lower" id="q3" name="branch" type="text" placeholder="Branch" required/>
								<input class="fs-anim-lower" id="q3a" name="CGPA" type="text" placeholder="CGPA(at BMSIT(VTU))" required/>
								<input class="fs-anim-lower" id="q3b" name="year" type="number" placeholder="Year of Passing out" min="2000" max="3000" step="1" required/>
							</div>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q4">Optional Information</label>
							<input class="fs-anim-lower" id="q4" name="photo" type="file" placeholder="Upload image"/>
							<input class="fs-anim-lower" id="q4a" name="gpa" type="text" placeholder="Grade Point average at current University"/>
							<input class="fs-anim-lower" id="q4b" name="entrance" type="text" placeholder="Entrance test taken"/>
							<input class="fs-anim-lower" id="q4c" name="score" type="text" placeholder="Entrance test score"/>
							
						</li>
					</ol><!-- /fs-fields -->
					<button class="fs-submit" type="submit">Upload Data</button>
				</form><!-- /fs-form -->
			</div><!-- /fs-form-wrap -->

		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/selectFx.js"></script>
		<script src="js/fullscreenForm.js"></script>
		<script>
			(function() {
				var formWrap = document.getElementById( 'fs-form-wrap' );

				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
					new SelectFx( el, {
						stickyPlaceholder: false,
						onChange: function(val){
							document.querySelector('span.cs-placeholder').style.backgroundColor = val;
						}
					});
				} );

				new FForm( formWrap, {
					onReview : function() {
						classie.add( document.body, 'overview' ); // for demo purposes only
					}
				} );
			})();
		</script>
	</body>
</html>

<?php
include "common.php";

if(isset($_POST['sumbit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$uni=$_POST['uni'];
	$course=$_POST['course'];
	$major=$_POST['major'];
	$branch=$_POST['branch'];
	$cgpa=$_POST['cgpa'];
	$year=$_POST['year'];
	$gpa=$_POST['gpa'];
	$entrance=$_POST['entrance'];
	$score=$_POST['score'];

	$comeon="INSERT into web.students values (NULL,'$name','$email','$phone','$uni','$year','$course','$major',NULL";

	mysqli_query($comeon);
	echo "ASDF";
	$conn->close();

}
?>