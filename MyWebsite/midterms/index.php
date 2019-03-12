<html>
	<head>
		<title>[Midterm] Alcordo</title>
	</head>
	<body>

		<table border=solid;>
			<tr>
				<td>ID</td>
				<td>First Name</td>
				<td>Middle Name</td>
				<td>Last Name</td>
				<td>Options</td>
			</tr>
		<?php
			$server = 'localhost';
			$username = 'root';
			$password = '';
			$database = 'alcordo';
			$recordsPerPage = 10;


			//Connects to SQL Server
			$connection = mysqli_connect($server,$username,$password);
			if ($connection->connect_errno){
				print("SQL can't conncet to PHP". $connection->connect_error);
				exit();
			}

			//Selects which database to use
			$selectDB = mysqli_select_db($connection, $database);
			if(!$selectDB){
				die("Database Selection Failed: ". mysqli_error($connection));
			}

			//Retrieves number of rows in the table
			$query = "SELECT * FROM tbl_names";
			$result = mysqli_query($connection, $query) or die ("Data retrieving error: '$query'");
			//Calculates for the number of pages in the pagination
			$totalPages = (mysqli_num_rows($result)-1)/$recordsPerPage+1;


			//Retrieves data from database
			$query = 'SELECT nameID, 
							 firstName, 
							 midName, 
							 lastName
					  FROM tbl_names
					  LIMIT 10
					  OFFSET 0;';


			$result = mysqli_query($connection, $query) or die ("Data retrieving error: '$query'");
			if(!$query)
				('Error in query: '. mysqli_error($query));


			if(mysqli_num_rows ($result)>0):
				foreach($result as $row): ?>
					<tr>
						<td><?php print $row['nameID'];    ?></td>
						<td><?php print $row['firstName']; ?></td>
						<td><?php print $row['midName'];   ?></td>
						<td><?php print $row['lastName'];  ?></td>
						<td><button type="submit">Edit  </button>
							<button type="submit">Delete</button></td>
					</tr>
				<?php endforeach;
			endif; ?>

			<a href="alcordo.sql.zip">Download SQL Dump</a>

		</table>
	</body>
</html>