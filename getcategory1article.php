<?php
	include 'connect.php';
?> 
 
<?php
    $category='Category1';
    $stmt=$db->prepare('SELECT * FROM articles WHERE Category = :category');
	$stmt->bindParam(':category', $category); 
    $stmt->execute();
    while ($row=$stmt->fetch()) {
		echo
			'<div class="tab-pane fade" id="' . $row['Category'] . '' . $row['ID'] . '">
				<div class="col-sm-12">
					<div class="well well-sm"> 
						<strong>
							' . $row['Title'] . ' (RefID:' . $row['ID'] . ')
						</strong>

						<p> 
							' . $row['Article'] . '
						</p>
						
						<div id="mytabs" class="list-group center-block" style="display:inline-block;">
								<a class="list-group-item" href="#I0" data-toggle="tab">Back</a>
						</div>	
					</div>
				</div>
            </div>'
		;
    }
?>