<?php
include('dbcon.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    // Delete query
    $query = "DELETE FROM `students` WHERE id = $id";
    $result = mysqli_query($connection, $query);

    if ($result) {
        // Redirect back to index page after deletion
        header("Location: index.php");
    } else {
        die("Deletion failed: " . mysqli_error($connection));
    }
}
?>
