<?php
	include 'connect.php';
?> 
 
<?php
    $sql=$db->prepare('SELECT * FROM articles');
    $sql->execute();
    while ($row=$sql->fetch()) {
		 echo
			'<div class="tab-pane fade" id="' . $row['ID'] . '">
                <div class="well well-sm"> 
							<strong>
								' . $row['Title'] . ' (RefID:' . $row['ID'] . ')
							</strong>

							<p> 
								' . $row['Article'] . '
							</p>
				</div>
            </div>'
		;
    }
?>