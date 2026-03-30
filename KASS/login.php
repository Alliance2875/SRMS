
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <div class="header">
    <title>Student Materials System</title>
    <h1><center>STUDENT MATERIALS RECORD SYSTEM</h1>

    <link rel="stylesheet" href="dashboard.css">
    <img src="logo.jpg" alt="KASS Logo" style="width:13%; height:79px; position: absolute;top:-1px;right: 5px;">
		
		</div>
	
	<center>
		 
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
        }
        .container {
            width: 420px;
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
        input, textarea, select {
            width: 28%;
            padding: 8px;
            margin-top: 5px;
        }
        textarea {
            resize: vertical;
        }
        button {
            margin-top: 20px;
            width: 28%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #1e7e34;
        }
		<br><br><br>
    </style>
	<div class="content">
		
	<form action="login.php" method="POST">
			<h4>LOGIN FORM</h4>
			<input type="text" name="UserName" placeholder="Enter your User Name" required=""><br><br>
			<input type="password" name="Password" placeholder="Enter your Password" required=""><br><br>
			<button ><input type="submit" name="ok" value="login"></button><br><br>
			<button><a href="reg.php">create new account</a></button>
			<?php
			if (isset($_POST['ok'])) {
				$con=mysqli_connect("localhost","root","","trainees_ass_management");
				$un=$_POST['UserName'];
				$pas=$_POST['Password'];
				$sel="SELECT * FROM users WHERE UserName='$un'";
				$sql=mysqli_query($con,$sel);
				$num=mysqli_num_rows($sql);
				$row=mysqli_fetch_array($sql);
				if ($row==0) {
				echo "<script>alert('user does not exist');</script>";
			}
				elseif ($row['Password']!=$pas) {
				echo "<script>alert('password not matched');</script>";
				}
				else{
					$ins="INSERT INTO users SET UserName='$id',Password='$pas'";
					$dis=mysqli_query($con,$ins);
					if ($dis) {
						$_SESSION['login']=$row['UserName'];
						header('location:dashboard.php');
					}
				}}
				
				?>
	

	</form>
</div>
</center>
</body>
</html>
