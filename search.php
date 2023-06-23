<?php
$mysqli = new mysqli('localhost', 'root', '', 'profitness');
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $keyword = $mysqli->real_escape_string($_POST['keyword']);
    $query = "SELECT * FROM vacancies WHERE title LIKE '%$keyword%'";
    $result = $mysqli->query($query);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "профессия: " . $row['title'] . "<br>";
            echo "основные требования: " . $row['requirements'] . "<br>";
            echo "условия работы: " . $row['conditions'] . "<br>";
            echo "<hr>";
        }
    } else {
        echo "No results found.";
    }
    $result->free();
}
$mysqli->close();
?>