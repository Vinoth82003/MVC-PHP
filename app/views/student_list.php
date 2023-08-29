<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
</head>
<body>
    <h1>Student List</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Del</th>
        </tr>
        <?php foreach ($students as $student): ?>
            <tr>
                <td><?php echo $student['id']; ?></td>
                <td><?php echo $student['name']; ?></td>
                <td><?php echo $student['age']; ?></td>
                <td> 
                    <form action="index.php?action=del" method="post">
                       <button type="submit" name="del" value="<?php echo $student['id']; ?>">del</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>Add New Student</h2>
    <form action="index.php?action=add" method="post">
        <label>Name: <input type="text" name="name"></label><br>
        <label>Age: <input type="number" name="age"></label><br>
        <input type="submit" value="Add Student">
    </form>
</body>
</html>
