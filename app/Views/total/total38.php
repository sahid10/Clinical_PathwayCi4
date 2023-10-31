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
$query = "SELECT biaya223,biaya224,biaya225,biaya226,biaya227,biaya228 FROM simrs.t_clinicalpathway WHERE NOMR = $NOMR";
$result = mysqli_query($connection, $query);

// Check if the query was successful
if ($result) {
    // Fetch the total_biaya value
    $row = mysqli_fetch_assoc($result);
    $totalBiaya = $row['biaya223'] + $row['biaya224'] + $row['biaya225'] + $row['biaya226'] + $row['biaya227'] + $row['biaya228'];
    // print_r($totalBiaya);
} else {
    echo "Error executing query: " . mysqli_error($connection);
}


?>

<!-- Display the total in an HTML <td> element -->
<td>
    <p id="total38">Rp <?php echo number_format($totalBiaya, 0, ',', '.'); ?>,00</p>
</td>