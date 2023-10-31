<?php
$host = '192.168.1.178';
$user = 'root';
$password = 'takonbudi';
$database = 'simrs';

// Create a connection
$connection = mysqli_connect($host, $user, $password, $database);

// Check if the connection was successful
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the RM number from the URL parameter
$NOMR = $_GET["nomr"];

// Query to calculate the sum of biaya1, biaya2, and biaya3 for the specific RM number
$query = "SELECT biaya199,biaya200,biaya201,biaya202,biaya203,biaya204 FROM simrs.t_clinicalpathway WHERE NOMR = $NOMR";
$result = mysqli_query($connection, $query);

// Check if the query was successful
if ($result) {
    // Fetch the total_biaya value
    $row = mysqli_fetch_assoc($result);
    $totalBiaya = $row['biaya199'] + $row['biaya200'] + $row['biaya201'] + $row['biaya202'] + $row['biaya203'] + $row['biaya204'];
    // print_r($totalBiaya);
} else {
    echo "Error executing query: " . mysqli_error($connection);
}


?>

<!-- Display the total in an HTML <td> element -->
<td>
    <p id="total34">Rp <?php echo number_format($totalBiaya, 0, ',', '.'); ?>,00</p>
</td>
