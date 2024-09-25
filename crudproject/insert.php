<?php
include('dbcon.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];

    // Insert query
    $query = "INSERT INTO `students` (first_name, last_name, age) VALUES ('$first_name', '$last_name', '$age')";

    $result = mysqli_query($connection, $query);

    if ($result) {
        // Redirect back to index page after insertion
        header("Location: index.php");
    } else {
        die("Insertion failed: " . mysqli_error($connection));
    }
}
?>
