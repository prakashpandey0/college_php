

<html>
	
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
	</head>
	<body style="background-image: url('allow.jpg');background-repeat: no-repeat;background-size: 1351px 703px;">
		<?php 
		$conn = mysqli_connect("localhost","root","","college")or die("connection error");
		$roll_id = $_GET['roll_id'];
		
		?>
		
		<form method="post">
		<table>
			<tr>
				<th>Erollment Number</th>
				<th>Assign College</th>
			</tr>
			<tr>
				<td><?php echo $roll_id;?></td>
				<td>
					<select name="college">
						<option value=""></option>
						<option value="Acharya Narendra Dev College">Acharya Narendra Dev College</option>
						<option value="Aryabhatta College">Aryabhatta College</option>
						<option value="Bhim Rao Ambedkar College">Bhim Rao Ambedkar College</option>
						<option value="Deen Dayal Upadhyaya College">Deen Dayal Upadhyaya College</option>
					</select>
				</td>
			</tr>
		</table>
		
			<input type="submit" name="assign" value="assign">
			
		</form>	
		<?php
		if(isset($_POST['assign'])){
			$result =mysqli_query($conn,"UPDATE student_reg 
									SET allowed_college = '".$_POST['college']."' where enroll_no = '$roll_id' ");
									
			if($result){
				echo "Thanks admin for assigning college Please go to <a href='admin.php'>dashboard</a>";
			}else{
				echo "something is wrong".mysqli_error($conn);
			}
		}
		
		?>
	</body>
</html>
