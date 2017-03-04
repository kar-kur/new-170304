<?php
// I suggest to change the columns "Text" to "Text_" or anything, "Text" is a reserved word for mysql
// Be careful!!!
// https://techtastico.com/post/lista-de-palabras-reservadas-en-mysql/

if(isset($_POST['news'])){

	//$Username = $_POST['Username']; really username is needed?
	$news = $_POST['news'];

	$db = new mysqli('localhost', 'root', '', 'mysqli_2');
		$sql = "UPDATE user SET news = '".$news."' WHERE Username = '" .$_SESSION['username']. "'";

	// again mysqli problem??????????!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	$result = mysqli_query ($db, $sql);
}

?>