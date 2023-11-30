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
           <h1>Baseball Card Database</h1>           
       </header>
	   <nav>Delete Player Records</nav>
	       <form method="get" action="DeletePlayer.php">
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
                                          
		      <input type="submit" name="submit">
		      <button type="reset">Reset Search Fields</button>
		      <button type="submit" formaction="MainMenu.php">Main Page</button>
               </form>
       </body>
</html>
