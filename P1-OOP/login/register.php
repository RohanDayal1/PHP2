<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
</head>
<body>
    <h2>Register Form</h2>
    <form action="register.php" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="role">Role:</label><br>
        <select id="role" name="role">
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select><br><br>
        
        <input type="submit" value="Register">
    </form>
</body>
</html>
