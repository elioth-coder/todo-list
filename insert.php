<?php
require_once "connection.php";

$sql = "INSERT INTO todo_list(title, description) 
    VALUES ('". $_POST['title'] ."', '" . $_POST['description'] . "')";

if($conn->query($sql)) {
    echo "<p style='color: green;'>Successfully inserted record!</p>";
} else {
    echo "<p style='color: red;'>Failed to insert the record</p>";
}

echo "<a href='./'>Go back</a>";