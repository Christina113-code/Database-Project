<!DOCTYPE html>
<html lang="en">
	<head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Baseball Card Database</title>
            <link rel="stylesheet" href="styles.css">
	</head>
        <header>
           <h1>Baseball Card Database</h1>
        </header>
               <nav>Insert Customer Records</nav>
	<body>
		<?php

		include ("ConnectBaseBallCardDB.php");

		$customerID=$_GET["customeridField"];
		$customerName=$_GET["customerName"];
		$address=$_GET["address"];
		$city=$_GET["city"];
		$state=$_GET["state"];
		$postal=$_GET["postal"];
		$email=$_GET["email"];

		$sql = "INSERT INTO CUSTOMER VALUES( '$customerID', '$customerName', '$address','$city', '$state', '$postal', '$email' );";

		if ($conn->query($sql) == TRUE)
		{
		    echo "<br><br>";
		    echo "New Customer record created successfully";
		} else
		{
		    echo "<br><br>";
		    echo "Error: " . $sql . "<br>" . $conn->error;
		    $conn->close();
		}


		?>
		<form>
		      <br><br>
		      <button type="submit" formaction="SearchCustomer.php">Search Customer Records</button>
		      <button type="submit" formaction="MainMenu.php">Main Page</button>
		</form>
	</body>
</html>
