<?php
// Database configuration
$servername = "112.202.233.208";
$username = "root";
$password = "";
$dbname = "lp_associates_main";
$port = "3306";

set_time_limit(0);
ini_set('max_execution_time', 0);

// Path to your CSV file
$csvFilePath = 'E:\xampp\htdocs\lp\uploader\leads.csv'; // <-- change this to your real path

// Create DB connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check DB connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if file exists
if (!file_exists($csvFilePath)) {
    die("CSV file not found at: " . $csvFilePath);
}


echo 'Memory limit: ' . ini_get('memory_limit') . "<br>";
echo 'Post max size: ' . ini_get('post_max_size') . "<br>";
echo 'Upload max filesize: ' . ini_get('upload_max_filesize') . "<br>";
echo 'Max execution time: ' . ini_get('max_execution_time') . "<br>";
// Open the CSV file
$handle = fopen($csvFilePath, "r");

if ($handle !== FALSE) {
    $row = 0;
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $row++;

        // Skip header row
        if ($row == 1) continue;

        // Get values
        $Firstname = $conn->real_escape_string(trim($data[1] ?? ''));
        $Lastname = $conn->real_escape_string(trim($data[2] ?? ''));
        $Primary_Phone = $conn->real_escape_string(trim($data[3] ?? ''));
        $Email = $conn->real_escape_string(trim($data[4] ?? ''));
        $Address = $conn->real_escape_string(trim($data[5] ?? ''));
        $City = $conn->real_escape_string(trim($data[6] ?? ''));
        $State = $conn->real_escape_string(trim($data[7] ?? ''));
        $Zip = $conn->real_escape_string(trim($data[8] ?? ''));
        $Time_Zone = $conn->real_escape_string(trim($data[9] ?? ''));

        // Insert query
        $sql = "INSERT INTO lp_leads_call (Firstname, Lastname, Primary_Phone, Email, Address, City, State, Zip, Time_Zone)
                VALUES ('$Firstname', '$Lastname', '$Primary_Phone', '$Email', '$Address', '$City', '$State', '$Zip', '$Time_Zone')";

        $conn->query($sql);
    }

    fclose($handle);
    echo "CSV file successfully imported!";
} else {
    echo "Error opening the CSV file.";
}

// Close the DB connection
$conn->close();
?>
