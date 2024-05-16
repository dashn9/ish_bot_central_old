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

// Get the bot_id from the GET request
$bot_id = $_GET['bot_id'];

// Prepare and execute the query to check if the bot_id exists in the database
$stmt = $conn->prepare("SELECT * FROM servers_status WHERE BOT_ID = ?");
$stmt->bind_param("s", $bot_id);
$stmt->execute();
$result = $stmt->get_result();

// Check if the bot_id exists in the database
if ($result->num_rows > 0) {
    // Bot_id exists, update the relevant fields
    $row = $result->fetch_assoc();
    $no_of_times_pinged = $row['NO_OF_TIMES_PINGED'] + 1;
    $ip_pinged_with = $_SERVER['REMOTE_ADDR'];
    
    // Prepare and execute the query to update the fields
    $stmt = $conn->prepare("UPDATE servers_status SET NO_OF_TIMES_PINGED = ?, IP_PINGED_WITH = ?, LAST_PINGED = NOW() WHERE BOT_ID = ?");
    $stmt->bind_param("sss", $no_of_times_pinged, $ip_pinged_with, $bot_id);
    $stmt->execute();
    
    echo "Server information updated successfully.";
} else {
    echo "Server not found.";
}

// Close the database connection
$stmt->close();
$conn->close();
?>

?>