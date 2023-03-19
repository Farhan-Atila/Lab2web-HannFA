<!DOCTYPE html>
<html>
<head>
	<title>Tugas 2 HannFA</title>
</head>
<body>
	<h2>Input Admin</h2>
	<form method="post" action="result.php">
		<label>Name:</label>
		<input type="text" name="name" required><br><br>

		<label>Date of Birth:</label>
		<input type="date" name="dob" required><br><br>

		<label>Occupation:</label>
		<select name="occupation">
			<option value="1">Software Engineer</option>
			<option value="2">Doctor</option>
			<option value="3">Lawyer</option>
		</select><br><br>

		<input type="submit" name="submit" value="Calculate">
	</form>
</body>
</html>