<?php
	$con = mysqli_connect("localhost", "root", "dldStKw87y", "blog");
	if ($con) {
		$slug = $_REQUEST['slug'];
		$sql = "SELECT id FROM posts WHERE slug = '".$slug."' LIMIT 1";
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