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
               <nav>Add Team</nav>
	<body>
		 
		   <form method="get" action="InsertTeam.php">
		   <table style="width:100%;">
                     <tr style="width:100%;">
                     <br>
		     <td>Team Id
			  <input type="text" name="team_id"  >
		     </td>
		     <td>Team Name
			  <input type="text" name="team_name"  >
		     </td>
		     <td>Players
			  <input type="text" name="num_players"  >
		     </td>
		     <td>Manager
			  <input type="text" name="manager"  >
		     </td>
		     <td>League
			  <input type="text" name="league"  >
		     </td>
		     <td>World Series Wins
			  <input type="text" name="world_series"  >
                     </tr>
                   </table>
                     <br><br><br>
		      <input type="submit">
		      <button type="submit" formaction="SearchTeam.php">Search Teams</button>
		      <button type="submit" formaction="MainMenu.php">Main Page</button>
		      </form>

	</body>
</html>
