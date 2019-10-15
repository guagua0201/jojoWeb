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
			
			<div class="col-5" style="text-align:right;" >
				<form class="form-inline active-cyan-4" action="searchResult.php" method="get">
				  <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
				    aria-label="Search" name="keyword">
				</form>
			</div>
		</div>

		<?php
			if(isset($_GET["nowPage"])){
				$nowPage = $_GET["nowPage"];
			}
			else{
				$nowPage = 0;
			}
			if(!isset($_GET["keyword"])){
				$key = "";
			}
			else{
				$key = $_GET["keyword"];
			}
		?>
		<div class = "row">
			<nav aria-label="Page navigation example">
		  	<ul class="pagination">

		  		<?php
		  			for($i=-2;$i<=2;$i++):
		  				$p = $nowPage + $i;
		  				if($p>=0):
		  		?>
			    			<li class="page-item"><a class="page-link" href=
					    		<?php
					    			echo "'/searchResult.php?keyword=".$key."&nowPage=".$p."'";
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
			if(isset($_GET["keyword"])){
				
				$key = $_GET["keyword"];
				$link = mysqli_connect(db_host, db_user, db_password, db_name);
				$sql = "SELECT * FROM `Animal` WHERE `Name` like '%".$key."%'";
				for($i = 3;$i<=7;$i++){
					$sql .= " OR ";
					$sql .= " `C".$i."` like '%".$key."%'";	
				}
				$sql .= " LIMIT 10 OFFSET ".$nowPage*10;
				
				if($result = mysqli_query($link, $sql)) {
					$cnt = 0;
					while($animal = mysqli_fetch_array($result)){
						if($cnt%2==0){
							echo "<div class='row' style='margin-top:10%;'>";
						}
						echo "<div class='col-6' style='text-align:center;'>";

						echo "<img src = '".$animal["ImagePath"]."' alt = 'fail' style = 'width:180;height:180;'>";
						echo "</div>";
						if($cnt%2==1){
							echo "</div>";
						}
						$cnt ++;
					}
				}
				else{
					echo "error2";
				}

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
