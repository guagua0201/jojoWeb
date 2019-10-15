<title>動物特徵查詢網</title>

<link rel="icon" href="/images/ladybug.ico">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
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
		$link = mysqli_connect(db_host, db_user, db_password, db_name);
		$nowPage = 0;
		if(!$link){
			echo "error1";
			exit(0);
		}
		if($level == 0){
			$sql = "SELECT * FROM `Animal` LIMIT 10 OFFSET ".$nowPage*10;
		}
		else{
			$sql = "SELECT * FROM `Animal` WHERE `C".$level."` = ".$name." LIMIT 10 OFFSET ".$nowPage*10;
		}
		echo $sql;

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

		mysql_close($link);
	}
?>
