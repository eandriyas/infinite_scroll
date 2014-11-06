<?php 
	require_once('connect.php');
	$load = htmlentities(strip_tags($_POST['load'])) *2;

	$sql = "SELECT * FROM images ORDER BY image_id DESC LIMIT ".$load.",2";
	$result = $connect->query($sql);

	while ($row = $result->fetch_assoc()) {
		?> 
			<img src="image/<?php echo $row['image_name']; ?>" height="480" width="640" alt=""><br>
		<?php
	}
	sleep(1);

 ?>