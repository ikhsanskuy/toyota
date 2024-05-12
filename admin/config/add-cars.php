<?php 
// include "../../connection.php";  

// if (isset($_POST['submit'])) {
//     $name = $_POST['name'];
//     $description = $_POST['description'];
//     $photo = $_POST['photo'];
//     $price = $_POST['price'];
//     $promo_price = $_POST['promo_price'];
//     $brochure = $_POST['brochure'];
//     $type = $_POST['type'];

//     $query = mysqli_query($con, "INSERT INTO `cars` (`name`,`description`,`photo`,`price`,`promo_price`,`brochure`,`type`) 
//                                             VALUES ('$name','$description','$photo','$price','$promo_price','$brochure','$type')");

//     if ($query) {
//         echo "<script>alert('Register sukses');
//         location.href='../cars.php';</script>";
//     } else {
//         echo "<script>alert('Gagal register');
//         location.href='../cars.php';</script>";
//     }
// }

?>

<?php
include "../../connection.php";

if (isset($_POST['submit'])) {
  // Sanitize user input (avoid potential XSS attacks)
  $name = htmlspecialchars($_POST['name']);
  $price = filter_var($_POST['price'], FILTER_SANITIZE_NUMBER_FLOAT); // Validate price format
  $type = htmlspecialchars($_POST['type']);
  $active = htmlspecialchars($_POST['active']);

  // File upload handling (improved with validation and security)
  $target_dir = "../file/photo/"; // Replace with your desired upload directory
  $allowTypes = array('jpg', 'jpeg', 'png'); // Allowed file types (brochures can be PDF)
  $file_uploaded = false; // Flag to indicate successful upload

  // Photo upload
  $photo = $_FILES['photo'];
  if ($photo['error'] === UPLOAD_ERR_OK) {
    $photo_name = basename($photo['name']);
    $photo_ext = pathinfo($photo_name, PATHINFO_EXTENSION);
    if (in_array($photo_ext, $allowTypes)) {
      $photo_target_file = $target_dir . $photo_name;
      // More sophisticated validation could check file size here
      if (move_uploaded_file($photo['tmp_name'], $photo_target_file)) {
        $file_uploaded = true;
      } else {
        echo "<script>alert('Error uploading photo');</script>";
      }
    } else {
      echo "<script>alert('Invalid photo format. Only JPG, JPEG, PNG allowed.');</script>";
    }
  } else {
    // Handle other upload errors (e.g., file size limit exceeded)
    echo "<script>alert('Error uploading photo: " . $photo['error'] . "');</script>";
  }

  // If uploads successful, proceed with database insertion
  if ($file_uploaded) {
    $query = mysqli_query($con, "INSERT INTO `cars` (`name`,`photo`,`price`,`type`,`active`)
                                            VALUES ('$name','$photo_name','$price','$type','$active')");

    if ($query) {
      echo "<script>alert('Car added successfully');
      location.href='../cars.php';</script>";
    } else {
      echo "<script>alert('Error adding car: " . mysqli_error($con) . "');</script>";
    }
  }
}
?>


