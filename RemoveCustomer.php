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
	   <nav>Delete Customer Records</nav>
	       <form method="get" action="DeleteCustomer.php">
                     <tr>
                     <br>
		     <td>Customer Id:
			  <input type="text" name="customeridField" required >
		     </td>
		     <td>Customer Name:
			  <input type="text" name="customerName" required >
		     </td>
		     <td>Address:
			  <input type="text" name="address"  >
		     </td>
		     <td>City:
			  <input type="text" name="city"  >
		     </td>
		     <td>State:
			  <input type="text" name="state"  >
		     </td>
		     <td>Postal:
			  <input type="text" name="postal"  >
		     </td>
		     <td>Email:
			  <input type="text" name="email"  >
		     </td>
			  
                     </tr>
                     <br><br><br>
                     
		      <input type="submit" name="submit">
		      <button type="reset">Reset Search Fields</button>
		      <button type="submit" formaction="MainMenu.php">Main Page</button>
               </form>
       </body>
</html>
