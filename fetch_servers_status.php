<?php
// Assuming you have established a connection to your MySQL database
$server_name = "localhost";
$server_username = "bots_handler";
$server_password = "39DyjMGW9Cm@@.a4";
$dbname = "bot_servers";

// Create a connection
$conn = new mysqli($server_name, $server_username, $server_password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the query to fetch server information
$stmt = $conn->prepare("SELECT * FROM servers_status ORDER BY NAME");
$stmt->execute();
$result = $stmt->get_result();

// Fetch server information into an associative array
$serverInfo = array();
while ($row = $result->fetch_assoc()) {
    $serverInfo[] = $row;
}

// Close the database connection
$stmt->close();
$conn->close();

// Set the response header as JSON
header('Content-Type: application/json');

// Return the server information as a JSON response
echo json_encode($serverInfo);
?>
