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
			<div class="col-7" style="text-align:center;">
				搜尋結果
			</div>
			
			<div class="col-5" style="text-align:right;" action="searchResult.php" method="get">
				<form class="form-inline active-cyan-4">
				  <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
				    aria-label="Search" name="keyword">
				</form>
			</div>
		</div>
		<?php
			if(isset($_GET["keyword"])){
				$key = $_GET["keyword"];
				$link = mysqli_connect(db_host, db_user, db_password, db_name);
				$sql = "SELECT * FROM `Animal` WHERE `Name` like '%".$key."%'";
				for($i = 3;$i<=7;$i++){
					$sql .= " OR ";
					$sql .= " `C".$i."` like '%".$key."%'";	
				}
				echo $sql;
			}
			else{
				echo "missed keyword!";
			}
		?>
	</div>
</body>




<?php
	include_once("footer.php");
?>

</html>
