<h1>My Todo List App</h1>

<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
    <label for="">Enter title of todo: </label><br>
    <input type="text" name="title" value="<?php echo $_GET['title']; ?>"><br>
    
    <label for="">Enter description of todo: </label><br>
    <input type="text" name="description" value="<?php echo $_GET['description']; ?>"><br>
    <hr>
    <button type="submit">Submit</button>
</form>
<hr>

<table border="1">
    <thead>
    <tr>
    <th>ID</th>
    <th>TITLE</th>
    <th>DESCRIPTION</th>
    <th>ACTION</th>
    </tr>
    </thead>
    <tbody>
    <?php
    require_once "connection.php";
    $sql = "SELECT * FROM todo_list";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { ?>
        <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['description']; ?></td>
        <td>
            <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
            <a href="edit.php?id=<?php echo $row['id']; ?>&title=<?php echo $row['title']; ?>&description=<?php echo $row['description']; ?>">Delete</a>
        </td>
        </tr>
        <?php
        } // end of while loop...
    } else {
        echo "<tr><td colspan='4' style='text-align: center;'>No results found.</td></tr>";
    }
    ?>
    </tbody>
</table>
