<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
        }
        .container {
            width: 400px;
            margin: 50px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }
        button {
            margin-top: 20px;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
    <div class="header">
    <title>Student Materials System</title>
    <h1><center>STUDENT MATERIALS RECORD SYSTEM</h1>
    <link rel="stylesheet" href="dashboard.css">
    <img src="logo.jpg" alt="KASS Logo" style="width:13%; height:79px; position: absolute;top:-1px;right: 5px;">

    </div>
</head>
<body>
    
		

<div class="container">
    <h2>Student Registration</h2>

    <form action="student.php" method="post">
        <label>Student Id</label>
        <input type="text" name="student_id" required>
        <label>Registration Number</label>
        <input type="text" name="registration_no" required>

        <label>First Name</label>
        <input type="text" name="first_name" required>

        <label>Last Name</label>
        <input type="text" name="last_name" required>

        <label>Department</label>
        <select name="Department" style="width: 105%;">
        <option value="">Select Department</option>
            <option>SOD</option>
            <option>NIT</option>
            <option>Auto Mobile</option>
            <option>CSA</option>
            <option>ELC</option>
            <option>BUC</option>
            <option>Accounting</option>
        </select>

        <label>Year</label>
        <select name="year" style="width: 105%;">
            <option value="">Select Year</option>
            <option>S1</option>
            <option>S2</option>
            <option>S3</option>
            <option>L3</option>
            <option>L4</option>
            <option>L5</option>
        </select>

        <label>Email</label>
        <input type="email" name="email">
       <input type="submit" name="ok" value="record"><br><br>
       <button><a href="dashboard.php" >Back</a></button>
</div>

<?php

		if(isset($_POST['ok'])){
		$con=mysqli_connect("localhost","root","","smrs");
		$student_id=$_POST['student_id'];
		$registration_no=$_POST['registration_no'];
		$fn=$_POST['first_name'];
		$last_name=$_POST['last_name'];
		$Department=$_POST['Department'];
		$year=$_POST['year'];
		$email=$_POST['email'];
		

$ins="INSERT INTO students SET student_id='student_id',registration_no='$registration_no',first_name='$fn',last_name='$last_name',Department='$Department',year='$year',email='$email'";
		$sql=mysqli_query($con,$ins);
		if ($sql) {
		
		echo "<script>alert('recorded');window.location='sview.php'</script>";
		}
		else{
			echo "false";
		}
	}

		?>
		</form>
	</center>
	</div>
    
</body>
</html>