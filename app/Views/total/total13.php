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
$query = "SELECT biaya73,biaya74,biaya75,biaya76,biaya77,biaya78 FROM simrs.t_clinicalpathway WHERE NOMR = $NOMR";
$result = mysqli_query($connection, $query);

// Check if the query was successful
if ($result) {
    // Fetch the total_biaya value
    $row = mysqli_fetch_assoc($result);
    $totalBiaya = $row['biaya73'] + $row['biaya74'] + $row['biaya75'] + $row['biaya76'] + $row['biaya77'] + $row['biaya78'];
    // print_r($totalBiaya);
} else {
    echo "Error executing query: " . mysqli_error($connection);
}
?>
<!-- Display the total in an HTML <td> element -->
<td>
    <p id="total13">Rp <?php echo number_format($totalBiaya, 0, ',', '.'); ?>,00</p>
</td>