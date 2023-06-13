<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="validate.php" method="post">
        <div class="form-group">
        <label for="#">ID</label>
        <input type="text" name="userId" class="form-control userId">
        </div>
        <div class="form-group">
            <label for="#">Password</label>
            <input type="password" name="password" class="form-control password">
        </div>
        <!-- <div class="form-group">
            <label for="#">Role</label>
            <select name="role">
                <option>Admin</option>
                <option>Student</option>
                <option>Teacher</option>
            </select>
        </div> -->
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>