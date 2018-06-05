


<a href="tas2.php?category=sport">Sport news</a> | <a href="tas2.php?category=politics">Politic news</a><br/><br/>
<a href="tas2.php?category=sport&format=json">Sport news (JSON)</a> | <a href="tas2.php?category=politics&format=json">Politic news (JSON)</a><br/><br/>

<?php
$news = ["sport"=>["C. Ronaldo has scored three goals in last five matches","Golovkin has won match for title"],"politics"=>["Trump has cancelled his visit to North Corea, because of sanction","N. Nazarbayev has approved new version of alphabet"]];
$category = "sport";
$category=null;
$format=null;

if (isset($_GET['category']) && isset($_GET['format'])) {
	$format=$_GET['category'];
	echo json_encode($news[$format]);
}
else if (isset($_GET['category'])){
	$category = $_GET['category'];
	echo $news[$category][0] . '<br>';
	echo $news[$category][1];
	
}
?>