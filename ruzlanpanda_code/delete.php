<?php
include 'dbConfig.php';

		;if(isset($_REQUEST['delete']))
		{
			$query = $db->query("delete FROM orders WHERE id = ".$_REQUEST["valueToSearch"]);
		}
		 elseif(isset($_REQUEST['confirmed']))
		{
			$query = $db->query("update orders 
			set confirmed='yes' 
			WHERE id = ".$_REQUEST["valueToSearch"]);
		}
?> 

<form action="delete.php" method="REQUEST">
			<input type="text" name="valueToSearch" placeholder="Order id"><br><br>
            <input type="submit" name="confirmed" value="Confirm"><br><br>
			<input type="submit" name= "delete" value="Delete"><br><br>
			</form>
