<!DOCTYPE html>
<html>
<head>
	<title>Form Validation</title>
</head>
<body>
	<h1>Simple Form Validation</h1>
	<form method="post" action="main.php">
		Name:<input type="text" name="name" placeholder="enter your name"><br><br>
		Email:<input type="email" name="email" placeholder="enter your email"><br><br>
		Gender:
				<input type="radio" name="gender" value="female">Female
				<input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="other">Other
				<br><br>
		Hobbies:<br><br><input type="checkbox" name="hobbies[]" value="singing">Singing
				<input type="checkbox" name="hobbies[]" value="dancing">Dancing
				<input type="checkbox" name="hobbies[]" value="playing">Playing
				<br><br>
		Date Of Birth:<input type="date" name="dob"><br><br>
		<textarea name="comment" style="width: 150px; height: 150px;">Input your comments here</textarea><br><br>
		<input type="submit" name="submit" value="Save">
		<input type="reset" name="reset"><br><br>
		<button type="btn btn-success"><a href="edit.php">Edit</a></button>
		
	</form>
</body>
</html>