<?php
// Connect to SQLite database
$database = new SQLite3('database.db');

// Fetch all visits from the database
$result = $database->query("SELECT * FROM visitors ORDER BY visit_time DESC");

// Display the visit list
echo "<h2>Visit List</h2>";
echo "<ul>";
while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    $ip_address = $row['ip_address'];
    // Get the visit time from the row
    $visit_time = $row['visit_time'];

    // Convert the visit time to a DateTime object
    $visit_datetime = new DateTime($visit_time);

    // Add 7 hours to the visit time
    $visit_datetime->modify('+7 hours');

    // Format the visit time
    $formatted_visit_time = $visit_datetime->format('Y-m-d H:i:s');

    echo "<li>IP: $ip_address | Visit Time: $formatted_visit_time</li>";
}
echo "</ul>";

// Close the database connection
$database->close();
?>
