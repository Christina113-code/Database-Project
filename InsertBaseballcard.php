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

		$cardID=$_GET["cardID"];
		$serialNumber=$_GET["serialNumber"];
		$currentValue=$_GET["currentValue"];
		$mfrdDate=$_GET["mfrdDate"];
		$grade=$_GET["grade"];
		$supplierID=$_GET["supplierID"];

		$sql = "INSERT INTO BASEBALLCARD VALUES( '$cardID', '$serialNumber', '$currentValue','$mfrdDate', '$grade', '$supplierID' );";

		if ($conn->query($sql) == TRUE)
		{
		    echo "<br><br>";
		    echo "New Baseball Card record created successfully";
		} else
		{
		    echo "<br><br>";
		    echo "Error: " . $sql . "<br>" . $conn->error;
		    $conn->close();
		}


		?>
		<form>
		      <br><br>
		      <button type="submit" formaction="Searchbaseball_card.php">Search Baseball Card Records</button>
		      <button type="submit" formaction="MainMenu.php">Main Page</button>
		</form>
	</body>
</html>
