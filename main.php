<title>動物特徵查詢網</title>

<link rel="icon" href="/images/ladybug.ico">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<?php
	define("db_host","localhost");
	define("db_user","root");
	define("db_password","sYq0ZJOPmwHF");
	define("db_name","jojoweb");


	function showGallery($level,$name){
		//echo "gallery";
		$link = mysqli_connect(db_host, db_user, db_password, db_name);
		if(!$link){
			echo "error1";
			exit(0);
		}
		if($level == 0){
			$cnt = 0;
			$sql = "SELECT * FROM `Animal` LIMIT 10";
			if($result = mysqli_query($link, $sql)) {
				while($animal = mysqli_fetch_array($result)){

					if($cnt%2==0){
						echo "<div class=\"row\">";
					}
					echo "<div class=\"col-6\">";

					echo "<img src = \"".$animal["ImagePath"]."\" alt = \"fail\" style = \"width:80%;height:80%;\">";
					echo "</div>";
					if($cnt%2==1){
						echo "</div>";
					}
				}
			}
			else{
				echo "error2";
			}

		}

		mysql_close($link);
	}
?>