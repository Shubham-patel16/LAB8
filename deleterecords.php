<?php
require_once 'db/Connection.php';

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    
    // Delete record from database
    $sql = "DELETE FROM client_info WHERE clientId = $id";
    
    if (mysqli_query($Connection, $sql)) {
        // Redirect back to view records with success message
        header("Location: view_records.php?success=Record deleted successfully");
        exit();
    } else {
        // Redirect back to view records with error message
        header("Location: view_records.php?error=" . urlencode(mysqli_error($Connection)));
        exit();
    }
} else {
    header("Location: view_records.php");
    exit();
}
?>