<!DOCTYPE html>
<html>
<head>
    <title>teachers List</title>
</head>
<body>
<form action="index.php?action=index" method="post">
    <input type="submit" value="students">
</form>
    <h1>teachers List</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Del</th>
        </tr>
        <?php foreach ($staffs as $staff): ?>
            <tr>
                <td><?php echo $staff['id']; ?></td>
                <td><?php echo $staff['name']; ?></td>
                <td><?php echo $staff['age']; ?></td>
                <td> 
                    <form action="index.php?action=delstaff" method="post">
                       <button type="submit" name="del" value="<?php echo $staff['id']; ?>">del</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>Add New Student</h2>
    <form action="index.php?action=addstaff" method="post">
        <label>Name: <input type="text" name="name"></label><br>
        <label>Age: <input type="number" name="age"></label><br>
        <input type="submit" value="Add Staff">
    </form>
</body>
</html>
