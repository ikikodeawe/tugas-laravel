<!DOCTYPE html>
<html>
<head>
	<title>Sanbercode HTML</title>
</head>
<body>
<h1>Buat Account Baru!</h1>
<h3>Sign Up Form</h3>
<form action="/welcome" method="POST">
	@csrf
	<label for="first_name">First Name :</label>
	<br><br>
	<input type="text" name="first_name" id="first_name">
	<br><br>
	<label for="last_name">Last Name :</label>
	<br><br>
	<input type="text" name="last_name" id="last_name">
	<br><br>
	<label for="gender">Gender :</label>
	<br><br>
	<input type="radio" name="gender" value="1"> Male <br>
	<input type="radio" name="gender" value="2"> Female <br>
	<input type="radio" name="gender" value="3"> Other
	<br><br>
	<label for="nationality">Nationality :</label>
	<br><br>
	<select name="nationality">
		<option value="1">Indonesian</option>
		<option value="2">Singaporean</option>
		<option value="3">Malaysian</option>
		<option value="4">Australian</option>
	</select>
	<br><br>
	<label for="language">Language Spoken :</label>
	<br><br>
	<input type="checkbox" name="language1" value="1"> Bahasa Indonesia <br>
	<input type="checkbox" name="language2" value="2"> English <br>
	<input type="checkbox" name="language3" value="3"> Other
	<br><br>
	<label for="bio">Bio :</label>
	<br><br>
	<textarea name="bio" id="bio" cols="30" rows="7"></textarea>
	<br><br>
	<input type="submit" name="signup" value="Sign Up">
</form>
</body>
</html>