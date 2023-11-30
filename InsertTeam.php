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
               <nav>Insert Team Records</nav>
	<body>
		<?php

		include ("ConnectBaseBallCardDB.php");

		$team_id=$_GET["team_id"];
		$team_name=$_GET["team_name"];
		$num_players=$_GET["num_players"];
		$manager=$_GET["manager"];
		$league=$_GET["league"];
		$world_series=$_GET["world_series"];

		$sql = "INSERT INTO TEAM VALUES( '$team_id', '$team_name', $num_players, '$manager', '$league', $world_series );";

		if ($conn->query($sql) == TRUE)
		{
		    echo "<br><br>";
		    echo "New Team record created successfully";
		} else
		{
		    echo "<br><br>";
		    echo "Error: " . $sql . "<br>" . $conn->error;
		    $conn->close();
		}
		?>
		<form>
		      <br><br>
		      <button type="submit" formaction="Searchteam.php">Search Supplier Records</button>
		      <button type="submit" formaction="MainMenu.php">Main Page</button>
		</form>
	</body>
</html>
