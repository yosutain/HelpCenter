<html>
	<head>
		<?php
			include 'connect.php';
		 ?> 
		<title> Index </title>
		<!-- BootStrap -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="css/Style.css">

		<!-- JS -->	
		<script src="js/Script.js"></script>		
	</head>

	<body>
		<?php
			$searchTerm = $_POST['searchTerm'];
			$searchTerm = "%"$searchTerm"%";
			$stmt = $db->prepare('SELECT * FROM users WHERE ID=:search OR Title LIKE :search OR Article LIKE :search');
			$stmt->execute([':search'=> $searchTerm]);
		    while ($row=$stmt->fetch())
		    {
				 echo	
					'<div class="well well-sm"> 
						<strong>
							' . $row['Title'] . ' (RefID:' . $row['ID'] . ')
						</strong>

						<p> 
							' . $row['Article'] . '
						</p>
		            </div>'
					;
		    }
		?>
		<a class="list-group-item" href="index.html">Back</a>
	</body>
</html>