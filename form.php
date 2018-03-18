<!DOCTYPE html>
<html>
<head>
	<title>ajax</title>
	<link rel="stylesheet" type="text/css" href="formstyle.css" />
	<script type="text/javascript" src="formscript.js"></script>
</head>
<body>
<div id="form-div">
<h1>Application Form</h1>
	<form action="cities.php" method="post">
		<div>
			<label>Name</label>
			<input type="text" name="username" />
		</div>
		<div>
			<label>Select State</label>
			<select onchange="fetchcities(this.value)">
			    <option>select state</option>
				<option>Haryana</option>
				<option>Gujrat</option>
				<option>Punjab</option>
				<option>Odisha</option>
			</select>
		</div>
		<div>
			<label>Select city</label>
			<select id="cities">
				<option>First select state</option>
			</select>
		</div>
		<div>
			<input type="submit" name="submit" />
		</div>
	</form>
</div>
</body>
</html>