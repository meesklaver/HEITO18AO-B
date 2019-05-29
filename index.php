<body>
<a href ="create_form.php">Toevoegen</a>
<?php
$host = 'localhost';
$dbname = 'Telefoonwinkel';
$username = 'root';
$password = 'Root';

$connectStr = 'mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8';
$db = new PDO($connectStr, $username, $password);

$sql = "SELECT * FROM Custommers";
$sth = $db->prepare($sql);
$sth->execute();
?>

<table class = "table">
    <thread>
        <tr>
            <th>id</th>
            <th>Model</th>
            <th>Fabrikant</th>
            <th>Geheugen</th>
            <th>Prijs</th>
        </tr>
    </thread>
    <tbody>
    <?php while ($row = $sth->fetch()) { ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["Model"]; ?></td>
            <td><?php echo $row["Fabrikant"]; ?></td>
            <td><?php echo $row["Geheugen"]; ?></td>
            <td><?php echo $row["Prijs"]; ?></td>
            <td><a href ="update_form.php?id=<?php echo $row["id"]?>">Wijzig</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>
