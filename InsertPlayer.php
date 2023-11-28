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
               <nav>Insert Player Records</nav>
	<body>
		<?php

		include ("ConnectBaseBallCardDB.php");

		$player_id=$_GET["player_id"];
		$first_name=$_GET["first_name"];
		$last_name=$_GET["last_name"];
		$RBIs=$_GET["RBIs"];
		$home_runs=$_GET["home_runs"];
		$shirt_number=$_GET["shirt_number"];
		$team_id = "";

		$sql = "INSERT INTO PLAYER VALUES( '$player_id', '$first_name', '$last_name', $RBIs, $home_runs, $shirt_number, '$team_id' );";

		if ($conn->query($sql) == TRUE)
		{
		    echo "<br><br>";
		    echo "New Player record created successfully";
		} else
		{
		    echo "<br><br>";
		    echo "Error: " . $sql . "<br>" . $conn->error;
		    $conn->close();
		}


		?>
		<form>
		      <br><br>
		      <button type="submit" formaction="Searchplayer.php">Search Player Records</button>
		      <button type="submit" formaction="MainMenu.php">Main Page</button>
		</form>
	</body>
</html>
