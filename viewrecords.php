<?php
$title = "View Records";
require_once 'include/header.php';
require_once 'db/Connection.php';
?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center mt-4 mb-4">View All Records</h1>
            <?php
            $sql = "SELECT * FROM client_info";

            // Execute the query
            $result = mysqli_query($Connection, $sql);

            // Display all the records
            if ($result) {
                if (mysqli_num_rows($result) > 0) {
                    echo '<div class="table-responsive">';
                    echo '<table class="table table-striped table-bordered">';
                    echo '<thead class="table-dark">';
                    echo '<tr>';
                    echo '<th>Client ID</th>';
                    echo '<th>Email</th>';
                    echo '<th>Address</th>';
                    echo '<th>City</th>';
                    echo '<th>Province</th>';
                    echo '<th>Postal Code</th>';
                    echo '</tr>';
                    echo '</thead>';
                    echo '<tbody>';

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td>' . $row["clientId"] . '</td>';
                        echo '<td>' . $row["email"] . '</td>';
                        echo '<td>' . $row["address"] . '</td>';
                        echo '<td>' . $row["city"] . '</td>';
                        echo '<td>' . $row["province"] . '</td>';
                        echo '<td>' . $row["postal_code"] . '</td>';
                        echo '</tr>';
                    }

                    echo '</tbody>';
                    echo '</table>';
                    echo '</div>';
                } else {
                    echo '<div class="alert alert-info">No records found in the database.</div>';
                }
            } else {
                echo '<div class="alert alert-danger">Error executing query: ' . mysqli_error($Connection) . '</div>';
            }
            ?>
            <div class="text-center mt-4">
                <a href="index.php" class="btn btn-primary">Back to Home</a>
            </div>
        </div>
    </div>
</div>

<?php
require_once 'include/footer.php';
?>