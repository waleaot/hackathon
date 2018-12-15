<!DOCTYPE>
<head>
	<title>Group ABCD</title>
	<link rel="stylesheet" type="text/css" href="prop.css">
</head>

<header>
	<h1>JAMBITE FORUM<h1>
</header>

<body>
	<div class="form">
	<form method="post">
		<p id="we">Select course: </p>
		<select name="subjcourses">
			<option>Select Subject</option>
			<option>Engineering</option>
			<option>Management</option>
			<option>Administration</option>
			<option>Agricultural Science</option>
			<option>Art</option>
			<option>Medical And Health</option>
			<option>Social Science</option>
			<option>Sciences</option>
		</select>
		<button class="button" type="submit">Search</button>
      <br>
	</form>
</div>

<div class ="ojo">
	<?php


			$HOST = "localhost";
			$USER = "root";
			$PASSWORD = "";
			$DBNAME = "subjcomb";

	 	$connect = mysqli_connect($HOST,$USER,$PASSWORD,$DBNAME);
		if($connect){
			$connect;
		}else{
			die('Database Connection Error' . mysqli_connect_error($connect));
		}
		if($_SERVER["REQUEST_METHOD"] == "POST") 
		{
		  $subj = $_POST['subjcourses'];

			$sql = "SELECT $subj FROM courses";
			$result = mysqli_query($connect, $sql);

			if($result){
				$row = mysqli_fetch_assoc($result);

				$theResult = $row[$subj];

				$formated = explode(",", $theResult);
				$count = count($formated);
				$n = 0;
				while ($n<$count){
					echo $formated[$n] ."<br/>";
					$n++;
				}
			}
			
		}


	?>
</div>
</body>