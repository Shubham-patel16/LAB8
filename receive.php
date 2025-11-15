<?php
$title = "Received";
require_once "db/Connection.php";
require_once './include/header.php';

?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $province = $_POST["province"];
    $postal_code = $_POST["postal_code"];

    $email = mysqli_real_escape_string($Connection, $email);
    $address = mysqli_real_escape_string($Connection, $address);
    $city = mysqli_real_escape_string($Connection, $city);
    $province = mysqli_real_escape_string($Connection, $province);
    $postal_code = mysqli_real_escape_string($Connection, $postal_code);

    $sql = "INSERT INTO client_info (email, address, city, province, postal_code) VALUES ('$email', '$address', '$city', '$province', '$postal_code')";

    if (mysqli_query($Connection, $sql)) {
        echo "<h1>Records inserted successfully.</h1>";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($Connection);
    }
}
?>
<?php
require_once './includes/footer.php';
?>