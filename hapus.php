<?php
if ($_GET['nim']) {
	include 'koneksi.php';
	$nim =$_GET['nim'];
	$que = mysqli_query($conn,"DELETE FROM 'data' WHERE Nim =$nim");
	if ($que) {
		header("Location:view.php");
	}
}
?>