<!DOCTYPE html>
<html>
<head>
	<title>Tugas 2 HannFA</title>
</head>
<body>
	<h2>Result</h2>

	<?php
		$name = $_POST['name'];
		$dob = $_POST['dob'];
		$occupation = $_POST['occupation'];

		$current_date = date("Y-m-d");
		$age = date_diff(date_create($dob), date_create($current_date))->y;

		echo "Name: $name<br>";
		echo "Date of Birth: $dob<br>";
		echo "Age: $age<br>";

		if ($occupation == 1) {
			$salary = 8000000;
			$job = "Software Engineer";
		} elseif ($occupation == 2) {
			$salary = 12000000;
			$job = "Doctor";
		} elseif ($occupation == 3) {
			$salary = 10000000;
			$job = "Lawyer";
		}

		echo "Occupation: $job<br>";
		echo "Salary: $salary<br>";
	?>

</body>
</html>