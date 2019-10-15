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
		<?php
			if(isset($_GET) && isset($_GET["level"]) && isset($_GET["name"])) {
				echo "1";
			}
			else{
				echo "2";
			}
		?>
	</div>
</body>




<?php
	include_once("footer.php");
?>

</html>
