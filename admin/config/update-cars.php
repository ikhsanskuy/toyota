<?php
include "../../connection.php";


if (isset($_POST['submit'])) {
    $carId = intval($_POST['carId']);
    $name = htmlspecialchars($_POST['name']);
    $price = filter_var($_POST['price'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $type = htmlspecialchars($_POST['type']);
    $active = htmlspecialchars($_POST['active']) === '1' ? 1 : 0;
    $namafoto = $_FILES['photo']['name'];
    $lokasifoto = $_FILES['photo']['tmp_name'];
    // jika foto diubah
    if (!empty($lokasifoto)) {
        move_uploaded_file($lokasifoto, "../file/photo/$namafoto");

        $query = mysqli_query($conn, "UPDATE `cars` SET 
		`name` = '$name', 
		`price` = '$price', 
		`type` = '$type', 
		`active` = '$active', 
		`photo` = '$namafoto'
		WHERE `id` = '$_GET[id]'");
    } else {
        $query = mysqli_query($conn, "UPDATE `cars` SET 
		`name` = '$name', 
		`price` = '$price', 
		`type` = '$type', 
		`active` = '$active'
		WHERE `id` = '$_GET[id]'");
    }



    if ($query) {
        echo "<script>
        alert('Data Diubah');
        location='../cars.php'; </script>";
    } else {
        echo "<script>alert('Data Gagal Diubah'); </script>";
        // header("location:./index.php");
    }
}

?>
