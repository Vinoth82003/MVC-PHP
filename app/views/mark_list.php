<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
</head>
<body>
    <form action="index.php?action=staff" method="post">
        <input type="submit" value="staffs">
    </form>
    <h1>Student List</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>mark</th>
            <th>Del</th>
        </tr>
        <?php foreach ($marks as $mark): ?>
            <tr>
                <td><?php echo $mark['id']; ?></td>
                <td><?php echo $mark['name']; ?></td>
                <td><?php echo $mark['mark']; ?></td>
                <td> 
                    <form action="index.php?action=delmark" method="post">
                       <button type="submit" name="del" value="<?php echo $mark['id']; ?>">del</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
