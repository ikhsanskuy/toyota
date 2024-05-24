<?php

// Include your database connection file (replace with your connection details)
require '../../connection.php';

// Get the car ID from the request (assuming it's sent via POST method)
$carId = isset($_POST['id']) ? (int) $_POST['id'] : 0;

// Validate the car ID (optional)
if ($carId <= 0) {
  echo json_encode(array('error' => 'Invalid car ID'));
  exit;
}

// Prepare the SQL query
$sql = "SELECT * FROM cars WHERE id = ?";

// Prepare the statement (optional for security)
$stmt = $con->prepare($sql);
$stmt->bind_param('i', $carId); // Bind the ID parameter to the statement

// Execute the query
$stmt->execute();

// Get the result
$result = $stmt->get_result();

// Check if car exists
if ($result->num_rows === 0) {
  echo json_encode(array('error' => 'Car not found'));
  exit;
}

// Fetch the car data as an associative array
$carData = $result->fetch_assoc();
// var_dump($carData);
// Close resources (result and statement if used)
$result->close();
if (isset($stmt)) {
  $stmt->close();
}

// Encode the data as JSON and return
echo json_encode($carData);

?>
