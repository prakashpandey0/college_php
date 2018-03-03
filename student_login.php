

<html>
	
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
	</head>
	<body style="background-image: url('student.jpg');background-repeat: no-repeat;background-size: 1351px 703px;">
		<?php 
		$conn = mysqli_connect("localhost","root","","college")or die("connection error");
		
		
		?>
		
		<form method="post">
		<table>
			<tr>
				<th style="color: blue;">Erollment Number</th>
				
			</tr>
			<tr>
				<td><input type="number" name="enroll"></td>
				<td><input type="submit" name="find" value="find"></td>
			</tr>
		</table>
		
			
			
		</form>	
		<?php
		if(isset($_POST['find'])){
			$result =mysqli_query($conn,"Select allowed_college from student_reg 
									where enroll_no = '".$_POST['enroll']."'");
			if($result){
			$college_name = mysqli_fetch_row($result);
			echo "Your allowed college is:<b>".implode("",$college_name)."</b>";
			}else{
				echo "Sorry please wait you dont have any assigned college for you.";
			}
		}
		
		?>
	</body>
</html>
