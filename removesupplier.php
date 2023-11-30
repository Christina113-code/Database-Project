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
	   <nav>Delete Supplier Records</nav>
	       <form method="get" action="DeleteSupplier.php">
	       	     <table style="width:100%;">

                     <tr style="width:100%;">
                     <br>
		     <td>Supplier Id
			  <input type="text" name="supplier_id"  >
		     </td>
		     <td>Name
			  <input type="text" name="name"  >
		     </td>
		     <td>Address
			  <input type="text" name="address"  >
		     </td>
		     <td>Purchase Price
			  <input type="text" name="card_purchased_price"  >
		     </td>
		     <td>Date Purchased
			  <input type="date" name="date_purchased"  >
		     </td>
		     <td>Card ID
			  <input type="text" name="card_id"  >
		     </td>
		     <td>Shipment ID
			  <input type="text" name="shipment_id"  >
		     </td>
                     </tr>
                     </table>
	             <br><br><br>  

		      <input type="submit" name="submit">
		      <button type="reset">Reset Search Fields</button>
		      <button type="submit" formaction="MainMenu.php">Main Page</button>
               </form>
       </body>
</html>
