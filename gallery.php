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
						$arr = [];
						$arr["level"] = $i;
						for($j=3;$j<=$i;$j++){
							$arr["c".$j] = $_GET["c".$j];
						}
						echo "<a href='";
						echo "/chooseCategory.php?";
						echo http_build_query($arr);
						echo "'>".$_GET["c".$i]."</a>";
					}
				?>
			</div>
			<div class="col-4">
				<a href=
				<?php
					echo "'/chooseCategory.php?";
					echo http_build_query($_GET)."'";
				?>
				>回到搜尋</a>
			</div>
		</div>

		<?php
			if(isset($_GET["nowPage"])){
				$nowPage = $_GET["nowPage"];
			}
			else{
				$nowPage = 0;
			}
		?>

		<div class = "row">
			<nav aria-label="Page navigation example" style="position: absolute; left:40%;">
			  	<ul class="pagination">

			  		<?php
			  			for($i=-2;$i<=2;$i++):
			  				$p = $nowPage + $i;
			  				if($p>=0):
			  		?>
				    			<li class="page-item"><a class="page-link" href=
						    		<?php
						    			$arr = $_GET;
						    			$arr["nowPage"] = $p;
						    			echo "'/gallery.php?";

						    			echo http_build_query($arr)."'";
						    		?>
				    			><?php $p1 = $p+1; echo $p1; ?></a> </li>
				    		<?php
				    		endif;
				    	endfor;
				    ?>
			  	</ul>
			</nav>
		</div>

		<?php 
			if(isset($_GET["level"])){
				showGallery($_GET["level"],$_GET["c".$_GET["level"]],$nowPage); 
			}
		?>
	</div>
</body>




<?php
	include_once("footer.php");
?>

</html>
