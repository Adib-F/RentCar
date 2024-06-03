<!DOCTYPE html>
<html lang="en">
<head>
    <title>User List</title>
</head>
<body>
    <h1>User List<h1>
    <table border="1">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
            </tr>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user->getId(); ?></td>
                    <td><?php echo $user->getUsername(); ?></td>
                    <td><?php echo $user->getEmail(); ?></td>
                </tr>
            <?php endforeach; ?>
    </table>
</body>
</html>