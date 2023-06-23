<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web2";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM contact_messages";
    $stmt = $conn->query($sql);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($result) > 0) {
        echo "<h2 style='text-align:center'>Contact Messages: </h2>";
        echo "<table style='border-collapse: collapse; width: 70%;margin: auto'>";
        echo "<tr><th style='border: 1px solid black; padding: 8px;'>Name</th><th style='border: 1px solid black; padding: 8px;'>Email</th><th style='border: 1px solid black; padding: 8px;'>Message</th></tr>";
        foreach ($result as $row) {
            echo "<tr>";
            echo "<td style='border: 1px solid black; padding: 8px;'>" . $row['name'] . "</td>";
            echo "<td style='border: 1px solid black; padding: 8px;'>" . $row['email'] . "</td>";
            echo "<td style='border: 1px solid black; padding: 8px;'>" . $row['message'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No records found.";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
