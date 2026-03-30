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
		<div class="content">
			<center><h2><i><b style="text-shadow: 2px 0px white;font-size: -9PX">REGISTRATION FORM</b></i></h2>
		<form action="reg.php" method="POST">
			<input type="text" name="UserName" placeholder="Enter your User Name" required=""><br><br>
			<input type="password" name="Password" placeholder="Enter your Password" required=""><br><br>
			<input type="password" name="cps" placeholder="Re Enter Password" required=""><br><br>
			<input type="submit" name="ok" value="SignUp">
			</center>
			<?php
			if (isset($_POST['ok'])) {
				$con=mysqli_connect("localhost","root","","srms");
				$un=$_POST['UserName'];
				$pas=$_POST['password'];
				$cps=$_POST['cps'];
				$sel="SELECT * FROM reg";
				$sql=mysqli_query($con,$sel);
				$num=mysqli_num_rows($sql);
				$row=mysqli_fetch_array($sql);
				if ($pas!=$cps) {
				echo "<script>alert('password not matched')</script>";
				}
				elseif ($num==1) {
					echo "<script>alert('user name has been taken')</script>";;
				}
				
				else{
					$ins="INSERT INTO users SET UserName='$un',Password='$pas'";
					$dis=mysqli_query($con,$ins);
					if ($dis) {
					echo "<script>alert('recorded');window.location='login.php'</script>";
					}
					else{
						echo "fail";
					}
				}
			}

			?>
			
		</form>
		</div>
	</center>

</body>
</html>