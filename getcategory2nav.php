<?php
	include 'connect.php';
?> 
 
<?php
	$category='Category2';
    $stmt=$db->prepare('SELECT * FROM articles WHERE Category = :category');
	$stmt->bindParam(':category', $category); 
    $stmt->execute();
    while ($row=$stmt->fetch()) {
		echo "<tr>";
		echo '<td><a class="list-group-item" href="#' . $row['Category'] . '' . $row['ID'] . '" data-toggle="tab">' . $row['Title'] . '</a></td>';
    }
?>