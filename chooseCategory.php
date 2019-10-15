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
						$arr = $_GET;
						$arr["level"] = $i;
						echo "<a href='";
						echo "/chooseCategory.php?";
						echo http_build_query($arr);
						echo "'>".$_GET["c".$i].">";
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
			if(!link) echo "error1";
			if($level == 0){
				$sql = "SELECT * FROM `Category` WHERE `Level` = 3";
				if($result = mysqli_query($link, $sql)) {
					$cnt = 0;
					while($cate = mysqli_fetch_array($result)){
						if($cnt%2==0){
							echo "<div class='row' style='margin-top:10%;'>";
						}
						$arr = [];
						$arr["level"] = 3;
						$arr["c3"] = $cate["Name"];

						echo "<div class='col-6' style='text-align:center;'>";

						echo "<a href = '/chooseCategory.php?";
						echo http_build_query($arr);
						echo "'>".$cate["Name"]."</a>";
						
						echo "</div>";
						if($cnt%2==1){
							echo "</div>";
						}
						$cnt ++;
					}
				}
			}
			else{
				$nextLevel = $level+1;
				$sql = "SELECT * FROM `Category` WHERE `Level` = ".$nextLevel." AND ";
				for($i=3;$i<=$level;$i++){
					if($i>3) $sql.=" AND ";
					$sql .= "C".$i." = '".$_GET["c".$i]."'";
				}

//				echo $sql;

				if($result = mysqli_query($link, $sql)) {
					$cnt = 0;
					while($cate = mysqli_fetch_array($result)){
						if($cnt%2==0){
							echo "<div class='row' style='margin-top:10%;'>";
						}

						$arr = $_GET;
						$arr["level"]++;
						$arr["c".$arr["level"]] = $cate["Name"];

						echo "<div class='col-6' style='text-align:center;'>";

						echo "<a href = '/chooseCategory.php?";
						echo http_build_query($arr);
						echo "'>".$cate["Name"]."</a>";
						
						echo "</div>";
						if($cnt%2==1){
							echo "</div>";
						}
						$cnt ++;
					}
				}

			}
		?>
	</div>
</body>




<?php
	include_once("footer.php");
?>

</html>
