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
			$sql = "INSERT INTO articles (Category, Title, Article)
				VALUES ('".$_POST['new_Category']."','".$_POST['new_Title']."','".$_POST['new_Article']."')";
			if ($db->query($sql) === TRUE) {
				echo "New record created successfully";
			} else {
				echo "New record created successfully";
			}
		?>

		<?php
			$contactCat = $_POST['new_Category'];
			$contactTopic = $_POST['new_Title'];
			$contactMessage = $_POST['new_Article'];
			$to = 'EMAIL';
			$message = '
				<html>
					<head>
					  <title>'.$contactTopic.'</title>
					</head>
					<body>
						<p>New Article has been added</p>
						<p>Title: '.$contactTopic.'</p>
						<p>Category: '.$contactCat.'</p>
						<p>Article: '.$contactMessage.'</p>
					</body>
				</html>
			';
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: Helpcenter <articleAdded>' . "\r\n";
			mail($to, $subject, $message, $headers);
		?>
		<a class="list-group-item" href="index.html">Back</a>
	</body>
</html>