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
			$sql = "UPDATE articles SET 
				Category='".$_POST['edit_Category']."', 
				Title='".$_POST['edit_Title']."', 
				Article='".$_POST['edit_Article']."' 
				WHERE ID='".$_POST['editID']."'";
			if ($db->query($sql) === TRUE) {
				echo "Article updated successfully";
			} else {
				echo "Article updated successfully";
			}
		?>

		<?php
			$contactCat = $_POST['edit_Category'];
			$contactTopic = $_POST['edit_Title'];
			$contactMessage = $_POST['edit_Article'];
			$editID = $_POST['editID'];
			$to = 'EMAIL';
			$message = '
			<html>
			<head>
			  <title>'.$contactTopic.'</title>
			</head>
			<body>
				<p>Article '.$editID.' has been updated</p>
				<p>Title: '.$contactTopic.'</p>
				<p>Category: '.$contactCat.'</p>
				<p>Article: '.$contactMessage.'</p>
			</body>
			</html>
			';
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: Helpcenter <articleUpdated>' . "\r\n";
			mail($to, $subject, $message, $headers);
		?>
		<a class="list-group-item" href="index.html">Back</a>
	</body>
</html>