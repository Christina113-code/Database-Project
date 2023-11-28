<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baseball Card Database</title>
    <link rel="stylesheet" href="styles.css">

</head>
       <body>
       <header>
           <h1>Search Teams</h1>
       </header>
               <nav>Search Teams</nav>
	       <form method="get" action="FindTeam.php">
                     <tr>
                     <br>
		     <td>Team Id:
			  <input type="text" name="player_id"  >
		     </td>
		     <td>Name
			  <input type="text" name="first_name"  >
		     </td>
		     <td>Manager
			  <input type="text" name="last_name"  >
		     </td>
		     <td>World Series
			  <input type="text" name="RBIs"  >
		     </td>
		     <td>League
			  <input type="text" name="home_runs"  >
		     </td>

			  
                     </tr>
                     <br><br><br>
                     
		      <input type="submit" name="submit">
		      <button type="reset">Reset Search Fields</button>
		      <button type="submit" formaction="MainMenu.php">Main Page</button>
		      
               </form>
       </body>
</html>
