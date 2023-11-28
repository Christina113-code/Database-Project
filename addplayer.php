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
               <nav>Add Player</nav>
	<body>
		 
		      <form method="get" action="InsertPlayer.php">
		      <table style="width:100%;">
                     <tr style="width:100%;">
                     <br>
                     
		     <td>Player Id:
			  <input type="text" name="player_id"  >
		     </td>
		     <td>First Name:
			  <input type="text" name="first_name"  >
		     </td>
		     <td>Last Name:
			  <input type="text" name="last_name"  >
		     </td>
		     <td>RBIs:
			  <input type="text" name="RBIs"  >
		     </td>
		     <td>Home Runs:
			  <input type="text" name="home_runs"  >
		     </td>
		     <td>Shirt Number:
			  <input type="text" name="shirt_number"  >
		     </td>
			  
                     </tr>
                     </table>
                     <br><br><br>
		      <input type="submit">
		      <button type="submit" formaction="Searchplayer.php">Search Player Records</button>
		      <button type="submit" formaction="MainMenu.php">Main Page</button>
		      
		      </form>

	</body>
</html>
