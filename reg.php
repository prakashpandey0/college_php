 <!--php header( 'Location: user/login.html' ) ;  -->
 
 <html>
	
	<head>
		<title>login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
		
	</head>
	<body style="background-image: url('clgg.jpg');background-repeat: no-repeat;background-size: 1351px 703px;">
	<div class="container">
	<div class="row">
	
	<form method="post">
		
		
		<div class="row" >
			<div class="col-lg-offset-4 col-lg-4  col-md-offset-3 col-md-3">
				<div class="form-group">
					<label for="username">First Name</label>
					<input class="form-control" type="text" name="fname" required>
				</div>
				<div class="form-group">
					<label for="username">Last Name</label>
					<input class="form-control" type="text" name="lname" required>
				</div>
				<div class="form-group">
					<label for="again_password">Email</label>
					<input class="form-control" type="email" name="email" required id="again_password">
				</div>
				<div class="form-group">
					<label for="username">Your password:</label>
					<input class="form-control" type="password" name="password" required id="password">
				</div>
				
				<div class="form-group">
					<label for="dob">Enter Your DOB </label>
					<input class="form-control" type="date" name="date_of_birth" required>
				</div>
				<div class="form-group" >
							College 1:<select class="selectpicker form-control" name="college1" >
								<option value="Acharya Narendra Dev College">Acharya Narendra Dev College</option>
								<option value="Aryabhatta College">Aryabhatta College</option>
							</select>	
				</div>
				<div class="form-group" >
							College 2:<select class="selectpicker form-control" name="college2" >
								<option value="Bhim Rao Ambedkar College">Bhim Rao Ambedkar College</option>
								<option value="Deen Dayal Upadhyaya College">Deen Dayal Upadhyaya College</option>
							</select>	
				</div>
				<div class="form-group">
					<label for="dob">Marks obtained in(12th)% </label>
					<input class="form-control" type="number" name="marks" required>
				</div>
				<div class="form-group">
					<label for="city">Gender</label>
						<label  class="radio-inline" for="gender">Male</i>
						<input  type="radio" name="gender" value="male" id="male">
						</label>
						<label  class="radio-inline" for="gender">Female</i>
						<input  type="radio" name="gender" value="female" id="female">
						</label>
				</div>
				
			</div>
			
			<div class="row">
					<div class="col-xs-offset-4 col-xs-8 col-md-offset-5 col-md-4 col-lg-offset-4 col-lg-6">
						<button style="padding-right:241px;padding-left:90px" type="submit"  class="btn btn-default  btn-lg btn-success"	 name="register" value="Register">Register</button></div>
			</div>

	</form>
</div>

</div>
</body>
</html>
<?php
if(isset($_POST['register'])){
	
	$conn = mysqli_connect("localhost","root","","college")or die("connection error");
	$eroll_no = mt_rand();
	
	$result = mysqli_query($conn,"Insert into student_reg(enroll_no,fname,	lname, 	marks,	
								email,password,date_of_birth,college1,college2,	gender)
								VALUES('$eroll_no', '".$_POST['fname']."',
									'".$_POST['lname']."','".$_POST['marks']."',
									'".$_POST['email']."','".$_POST['password']."',
									'".$_POST['date_of_birth']."','".$_POST['college1']."',
									'".$_POST['college2']."','".$_POST['gender']."') ");
	if($result){
		echo "<h1>Thanks for registartion your enrollment number is ".$eroll_no."Please use it to check to know the alloted college to you Thanks.</h1>";
	}else{
		echo "Query error".mysqli_error($conn);
	}
	
}


?>
