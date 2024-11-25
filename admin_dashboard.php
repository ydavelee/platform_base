<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <h2>User Admin Dashboard</h2>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= htmlspecialchars($user['id']); ?></td>
                    <td><?= htmlspecialchars($user['username']); ?></td>
                    <td><?= htmlspecialchars($user['email']); ?></td>
                    <td><?= htmlspecialchars($user['role']); ?></td>
                    <td>
                        <a href="/admin/edit/<?= $user['id']; ?>">Edit</a> | 
                        <form action="/admin/delete/<?= $user['id']; ?>" method="POST" style="display:inline;">
                            <!-- CSRF Token for delete action -->
                            <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
