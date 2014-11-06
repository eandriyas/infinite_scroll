<?php
	require_once("connect.php");
	$sql= "SELECT * FROM images ORDER BY  image_id DESC LIMIT 0,2";
	$result = $connect->query($sql);
	

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>infinite scroll</title>
		<style>
		.loader{
			position: fixed;
			bottom: 0;
			left: 690px;

		}
			
		</style>
		
	</head>
	<body>
		<div class="images">
			<?php
				while ($row = $result->fetch_assoc()) 
				{
				?>
					<img src="image/<?php echo $row['image_name']; ?>" alt="" height="480" width="640"><br>
			<?php
			}
			?>
		</div>
		<div class="loader">
			<img src="image/ajax-loader.gif" alt="">
		</div>
		
		
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.js"></script>
		<script>
		$(document).ready(function(){
			$('.loader').hide();
			var load = 0;
			$(window).scroll(function(){
				if($(window).scrollTop()== $(document).height()-$(window).height()){
					$('.loader').show();
					load++;
					$.post("ajax.php", {load:load}, function(data){
						$(".images").append(data);
						$('.loader').hide();
					});
				}
			});
		});
		</script>
	</body>
</html>