<?php
if(isset($_POST["submit"]))
{
	
	
	if(empty($_POST["email"])){
		$email="*Email ID is required";

	}
	else{
		echo $_POST["email"];
	}
	if(empty($_POST["country"])) {
		$country="*County is required";
	}
	else{
		echo $_POST["country"];
	}
	if(empty($_POST["gender"])){
		$gender="*Gender is required";
	}
	else{
		echo $_POST["gender"];
	}

}

?>
<html>
<body>
<center>

<form action="" method="POST">
	
<fieldset>		
<h3><b><u>PHP Form Validation</u></b></h3> <br><br>	
<label>Name</label>
<input type="text" name="name"><?php 
    if(empty($_POST["name"])){
		$name="*Name is required";
    }
	else{
		echo $_POST["name"];
	}
		echo $name;?><br><br>
<label>Email ID</label>
<input type="text" name="email"><?php echo $email;?><br><br>
<label>Country</label>
<input type="text" name="country"><?php echo $country;?><br><br>
<label>Gender</label>
<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<input type="radio" name="gender" value="Other">Other   <?php echo $gender;?><br><br>
<input type="submit" name="submit" value="submit">
</fieldset>
</form>
</center>
</body>
</html>