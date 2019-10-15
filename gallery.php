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
		<div class="row">
			<div class="col-8">
				現在位置: 
				<?php
					if(isset($_GET) && isset($_GET["level"])) {
						$level = $_GET["level"];
					}
					else{
						$level = 0;
					}
					for($i=3;$i<=$level;$i++){
						if($i != 3) echo " > ";
						echo $_GET["c".$i];
					}
				?>
			</div>
		</div>
		<?php 
			if(isset($_GET["Level"])){
				showGallery($_GET["level"],$_GET["c".$_GET["level"]]); 
			}
		?>
	</div>
</body>




<?php
	include_once("footer.php");
?>

</html>
