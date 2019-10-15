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
					if(isset($_GET) && isset($_GET["level"]) && isset($_GET["name"])) {
						$level = $_GET["level"];
						$name = $_GET["name"];
					}
					else{
						$level = 0;
						$name = "";
					}
					for($i=3;$i<=$level;$i++){
						if($i != 3) echo " > ";
						echo $GET["c".$i];
					}
				?>
			</div>
			<div class="col-4">
				<button type="button" class="btn btn-secondary" onclick="location.href=
				<?php
					echo "'gallery.php?";
					if(isset($_GET["level"])){
						echo http_build_query($_GET);
					}
					echo "'";
				?>
				">瀏覽結果</button>
			</div>
		</div>
		<?php
			$link = mysqli_connect(db_host, db_user, db_password, db_name);
			if($level == 0){
				$sql = "SELECT * FROM `Category` WHERE `Level` = 3";
			}
		?>
	</div>
</body>




<?php
	include_once("footer.php");
?>

</html>
