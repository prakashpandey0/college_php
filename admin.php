
<html>
	
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
	</head>
	<body style="background-image: url('admin.jpg');background-repeat: no-repeat;background-size: 1351px 703px;">
	<table class="table">
	<tr>
		<th>Name</th>
		<th>Enrollment Number</th>
		<th>Marks</th>
		<th>College Assigned<th>
		<th>Assign college<th>
	</tr>
<?php
$conn = mysqli_connect("localhost","root","","college")or die("connection error");
	
$result = mysqli_query($conn,"Select * from student_reg")	;

if(mysqli_num_rows($result)>0){
	while($row = mysqli_fetch_assoc($result)){
		
?>
	<tr>
		<td><?php echo $row['fname'];?></td>
		<td><?php echo $row['enroll_no'];?></td>
		<td><?php echo $row['marks'];?></td>
		<td><?php echo $row['allowed_college'];?></td>
		<td><a href="allow_college.php?roll_id=<?php echo $row['enroll_no'];?>">Assign college</td>
	</tr>

	<?php }
	}else{
		echo "Any student not registerd yet";
	}
	?>
	</table>
	<?php
	if(isset($_POST['assign'])){
		
		$update = mysqli_query($conn,"Update student_reg SET allowed_college");	
		
	}
	
	
	
	?>
	
	
	
	