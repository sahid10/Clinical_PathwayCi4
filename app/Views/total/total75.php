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
$query = "SELECT biaya445,biaya446,biaya447,biaya448,biaya449,biaya450 FROM simrs.t_clinicalpathway WHERE NOMR = $NOMR";
$result = mysqli_query($connection, $query);

// Check if the query was successful
if ($result) {
    // Fetch the total_biaya value
    $row = mysqli_fetch_assoc($result);
    $totalBiaya = $row['biaya445'] + $row['biaya446'] + $row['biaya447'] + $row['biaya448'] + $row['biaya449'] + $row['biaya450'];
    // print_r($totalBiaya);
} else {
    echo "Error executing query: " . mysqli_error($connection);
}
?>

<!-- Display the total in an HTML <td> element -->
<td>
    <p id="total75">Rp <?php echo number_format($totalBiaya, 0, ',', '.'); ?>,00</p>
</td>