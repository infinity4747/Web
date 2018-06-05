<!DOCTYPE html>
<html>
<head>
	<style>
.cards{
	display:flex;
	flex-wrap:wrap;
	width:700px;
	margin-left:auto;
	margin-right:auto;
}
.cards .card{
	width:350px;
	height: 60px;
	padding: 10px;
	border:1px solid grey;
	border-radius:5px;
	display:flex;
	margin:10px;
}
.card .title{
	font-size:20px;
	font-weight:bold;
}
.card .price{
	color:black;
}
.card .price span{
	font-weight: bold;
}
.card .description{
	margin-left: 10px;
	display:flex;
	flex-direction:column;
}
.card .price{
	flex-grow:1;
}

</style>
	<title></title>
</head>
<body>

<div class = "cards">
	<?php

		$conn = new mysqli("localhost", "root", "", "web");

		if($conn->connect_error){
			die ("Connection failed: ". $conn->connect_error);
		}

		$sql = "SELECT * FROM car, car2 WHERE car.maker_id = car2.id";
		$result = $conn -> query($sql);

		if($result -> num_rows > 0){
			while($row = $result->fetch_assoc()){

				$maker = $row['maker'];
				$model = $row['model'];
				$price = $row['price']; 
				$image = $row['image'];

				echo "<div class='card'>
						<img src=  '".$image."' style='width:90px; height:70px;'>
						<div class='description'>
							<div class='title'> ".$maker." ". $model."</div>
							<div class='price'> <span>Price: </span>". $price." </div>
						</div>			
					</div>";
			}
		}
		else{
			echo "0 results";
		}


		$conn->close();



	?>
</div>

</body>
</html>