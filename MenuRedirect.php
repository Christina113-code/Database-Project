<!DOCTYPE html>
<html lang="en">
	<?php
           $table_name  = '';
           $action_name = '';
           if(isset($_POST['table']))
           {
              $table_name = $_POST['table'];  // Store table name
           }
           if(isset($_POST['action']))
           {
              $action_name = $_POST['action'];  // Store action (search, add, remove, view_all)
           }
           $program = $action_name .   $table_name ;
           
           include ("$program.php");
       ?>		
</html>

