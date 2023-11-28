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
               <nav>Add Customer</nav>
	<body>
		 
		      <form method="get" action="InsertCustomer.php">
		      <table style="width:100%;">
                     <tr style="width:100%;">
                     <br>
                     
		     <td>Customer Id:
			  <input type="text" name="customeridField" required >
		     </td>
		     <td>Customer Name:
			  <input type="text" name="customerName" required >
		     </td>
		     <td>Address:
			  <input type="text" name="address" ID="nf" >
		     </td>
		     <td>City:
			  <input type="text" name="city" ID="nf" >
		     </td>
		     <td>State:
			  <input type="text" name="state" ID="nf" >
		     </td>
		     <td>Postal:
			  <input type="text" name="postal" ID="nf" >
		     </td>
		     <td>Email:
			  <input type="text" name="email" ID="nf" >
		     </td>
                     </tr>
                     </table>
                     <br><br><br>
		      <input type="submit">
		      <button type="submit" formaction="SearchCustomer.php">Search Sales Records</button>
		      <button type="submit" formaction="MainMenu.php">Main Page</button>
		      
		      </form>

	</body>
</html>
