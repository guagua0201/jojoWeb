<html>

<head>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<?php 
		include_once("main.php");
	?>
</head>

<?php
	include_once("header.php"); 	
?>



<!-- body start from here -->
<body style="background-color:gray;">
	<div class="container" style="background-color:white;border:7%;border-radius:10%;">
		<div class = "row">
			<button type="button" class="btn btn-secondary">選擇分類</button>
			<form class="form-inline active-cyan-4">
			  <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
			    aria-label="Search">
			  <i class="fas fa-search" aria-hidden="true"></i>
			</form>
		</div>
		<?php showGallery(0,""); ?>
	</div>
</body>




<?php
	include_once("footer.php");
?>

</html>
