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
			$sql = "DELETE FROM articles WHERE ID = ".$_POST['deleteRef']."";
			if ($db->query($sql) === TRUE) {
				echo "Article successfully removed";
			} else {
				echo "Article successfully removed";
			}
		?>

		<?php
			$deleteRef = $_POST['deleteRef'];
			$to = 'EMAIL';
			$message = '
				<html>
					<head>
					  <title>articleDeleted</title>
					</head>

					<body>
						<p>RefID: '.$deleteRef.' has been removed</p>
					</body>
				</html>
			';
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: Helpcenter <articleRemoved>' . "\r\n";
			mail($to, $subject, $message, $headers);
		?>
		<a class="list-group-item" href="index.html">Back</a>
	</body>
</html>