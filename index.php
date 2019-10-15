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
	<div class="container" style="background-color:white;padding:7%;border-radius:5%;">
		<div class = "row">
			<div class="col-7">

				<button type="button" class="btn btn-secondary" onclick="location.href='chooseCategory.php';">選擇分類</button>
			</div>
			
			<div class="col-5" style="text-align:right;">
				<form class="form-inline active-cyan-4">
				  <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
				    aria-label="Search">
				</form>
			</div>
		</div>
		<?php showGallery(0,""); ?>
	</div>
</body>




<?php
	include_once("footer.php");
?>

</html>
