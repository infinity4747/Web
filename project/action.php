<?php	

	function set_data(){
		$connect = mysqli_connect('localhost', 'root', '');

		if(!$connect){
			echo "Failed to connect to the server";
		}

		if(!mysqli_select_db($connect, 'project')){
			echo "Failed to connect to Database";
		}

		$name = $_POST['name'];
		$description = $_POST['description'];
		$price = $_POST['cost'];
		$image = $_FILES['image']['name'];

		$sql = "INSERT INTO elements (title_id, description, price, image) VALUES ('$name', '$description', '$price', '$image')";

		if(!mysqli_query($connect, $sql)){
			echo 'Not inserted';
		}
		else {
			header("Location: teas.php");
			die();

		}
		
	}
	set_data();
?>