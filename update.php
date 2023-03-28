<?php
require_once "connection.php";

$sql = "UPDATE todo_list SET title='". $_POST['title'] ."', description='". $_POST['description'] ."' WHERE id=" . $_POST['id'];

if($conn->query($sql)) {
    echo "<p style='color: green;'>Successfully updated record!</p>";
} else {
    echo "<p style='color: red;'>Failed to update the record</p>";
}

echo "<a href='./'>Go back</a>";