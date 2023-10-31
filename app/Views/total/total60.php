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
$query = "SELECT biaya355,biaya356,biaya357,biaya358,biaya359,biaya360 FROM simrs.t_clinicalpathway WHERE NOMR = $NOMR";
$result = mysqli_query($connection, $query);

// Check if the query was successful
if ($result) {
    // Fetch the total_biaya value
    $row = mysqli_fetch_assoc($result);
    $totalBiaya = $row['biaya355'] + $row['biaya356'] + $row['biaya357'] + $row['biaya358'] + $row['biaya359'] + $row['biaya360'];
    // print_r($totalBiaya);
} else {
    echo "Error executing query: " . mysqli_error($connection);
}
?>

<!-- Display the total in an HTML <td> element -->
<td>
    <p id="total60">Rp <?php echo number_format($totalBiaya, 0, ',', '.'); ?>,00</p>
</td>