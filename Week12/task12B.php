
<?php
	$i = 0;
	$cars = [["id"=>1,"maker"=>"Toyota","model"=>"Camry 50","price"=>30000],["id"=>2,"maker"=>"Mercedes","model"=>"C 100","price"=>20000],
		["id"=>3,"maker"=>"Daewoo","model"=>"Nexia","price"=>15000],["id"=>4,"maker"=>"Mercedes","model"=>"S 500","price"=>27000]];

	echo "{$cars[0]["maker"]} {$cars[0]["model"]}  ";?>
	<span id="1"><a href="task12BaddToBasket.php?id=1">Add to basket</a></span>
<?php
	echo "<br>";
	echo "{$cars[1]["maker"]} {$cars[1]["model"]}  ";?>
	<span id="2"><a href="task12BaddToBasket.php?id=2">Add to basket</a></span>
<?php
	echo "<br>";
	echo "{$cars[2]["maker"]} {$cars[2]["model"]}  ";?>
	<span id="3"><a href="task12BaddToBasket.php?id=3">Add to basket</a></span>
<?php
	echo "<br>";
	echo "{$cars[3]["maker"]} {$cars[3]["model"]}  ";?>
	<span id="4"><a href="task12BaddToBasket.php?id=4">Add to basket</a></span>
<?php
	echo "<br>";

	echo "Item with id: ";
	$basket = null;
	if (isset($_COOKIE["basket"])){
		$basket = json_decode($_COOKIE["basket"]);
		calc($basket,$i);
	}
	else{
		$basket = [];
	}
	
	function calc($bas,$j){
		foreach($bas as $task12BaddToBasket){
			echo "<script>document.getElementById('".$task12BaddToBasket."').innerHTML = 'Already in basket';</script>";
		}
		for($i = 0;$i<count($bas);$i++){
			if($j==0)
				echo $bas[$i];
			else 
				echo " ,$bas[$i]";
			$j++;
		}
	}
?>