<?php
	$con = mysqli_connect("localhost", "root", "dldStKw87y", "blog");
	if ($con) {
		$category = $_REQUEST['category'];
		$sql = "SELECT id FROM categories WHERE category = '".$category."' LIMIT 1";
		$query = mysqli_query($con, $sql);

		if (mysqli_num_rows($query) == 0) {
			echo "0";
		} else {
			echo "1";
		}
	} else {
		echo "ERROR";
	}
?>