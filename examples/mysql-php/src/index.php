<?php
echo 'My host is ' .$_ENV["host"] . '!';
echo 'My username is ' .$_ENV["username"] . '!';
echo 'My password is ' .$_ENV["password"] . '!';
echo 'My port is ' .$_ENV["port"] . '!';
?>
<?php

$host = $_ENV['host'];
$port = $_ENV['port'];
$dbname = 'mysql';
$username = $_ENV['username'];
$password = $_ENV['password'];

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);

    $sql = 'SELECT User, password_last_changed
               FROM mysql.user';

    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Example connecting to a mysql database</title>
    </head>
    <body>
        <div>
            <h1>Users</h1>
            <table>
                <thead>
                    <tr>
                        <th>User</th>
                        <th>password_last_changed</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $q->fetch()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['User']) ?></td>
                            <td><?php echo htmlspecialchars($row['password_last_changed']); ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
    </body>
</div>
</html>