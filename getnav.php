<?php
	include 'connect.php';
?> 

<?php
    $sql=$db->prepare('SELECT * FROM articles');
    $sql->execute();
    while ($row=$sql->fetch()) {
		echo "<tr>";
		echo '<td><a class="list-group-item" href="#' . $row['ID'] . '" data-toggle="tab">' . $row['Title'] . '</a></td>';
    }
?>