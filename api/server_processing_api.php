<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = new mysqli('112.202.233.208', 'root', '', 'lp_associates_main', '3306');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Read DataTables parameters
$draw = intval($_GET['draw']);
$start = intval($_GET['start']);
$length = intval($_GET['length']);
$searchValue = $_GET['search']['value'] ?? '';

// Prepare the WHERE clause for filtering
$where = "";
if (!empty($searchValue)) {
    $searchValue = $conn->real_escape_string($searchValue); // Prevent SQL Injection
    $where = "WHERE 
        LLC.Firstname LIKE '%$searchValue%' OR
        LLC.Lastname LIKE '%$searchValue%' OR
        LLC.Primary_Phone LIKE '%$searchValue%' OR
        LLC.Email LIKE '%$searchValue%' OR
        LLC.Address LIKE '%$searchValue%' OR
        LLC.City LIKE '%$searchValue%' OR
        LLC.State LIKE '%$searchValue%' OR
        LLC.Zip LIKE '%$searchValue%' OR
        LLC.status LIKE '%$searchValue%'"; // Added search for status
}

// Total records without filtering
$totalRecordsQuery = $conn->query("SELECT COUNT(*) as total FROM lp_leads_call LLC");
$totalRecords = $totalRecordsQuery->fetch_assoc()['total'];

// Total records with filtering
$totalFilteredQuery = $conn->query("SELECT COUNT(*) as total FROM lp_leads_call LLC $where");
$totalFiltered = $totalFilteredQuery->fetch_assoc()['total'];

// Fetch data with JOIN for lp_agent and include status
$query = "SELECT LLC.*, LA.email as Agent_Email FROM lp_leads_call LLC
          LEFT JOIN lp_agent LA ON LLC.agent_id = LA.agent_id
          $where LIMIT $start, $length";
$result = $conn->query($query);

// Ensure the query has been executed correctly
if (!$result) {
    die('Query failed: ' . $conn->error);
}

$data = [];
while ($row = $result->fetch_assoc()) {
    // Display the data, including the status and agent's name
    $data[] = [
        $row['Id'],
        $row['Firstname'] . " " . $row['Lastname'],
        $row['Primary_Phone'],
        $row['Email'],
        $row['Address'] . ", " . $row['City'] . ", " . $row['State'] . ", " . $row['Zip'],
        $row['Agent_Email'] ?? 'N/A', // Display the agent's name or 'N/A' if not available
        $row['status'],  // Display the status value
        '<a href="?view=LEADINFO&id='.$row['Id'].'" class="btn btn-sm btn-primary">View</a>'
    ];
}

// Ensure the data is correctly formatted
if (empty($data)) {
    die('No data returned from the query.');
}

// Convert data to JSON
$json = json_encode([
    "draw" => $draw,
    "recordsTotal" => $totalRecords,
    "recordsFiltered" => $totalFiltered,
    "data" => $data
]);

// Check for JSON encoding errors
if (json_last_error() !== JSON_ERROR_NONE) {
    die('JSON encode error: ' . json_last_error_msg());
}

// Output JSON
echo $json;
?>
