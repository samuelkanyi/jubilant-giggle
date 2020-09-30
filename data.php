<?php
$dsn = "mysql:host=localhost;dbname=test";
$conn = new PDO($dsn, "amshel", "password");
$id;

if (isset($_GET['q'])) {
    $id = $_GET['q'];
} else {
    die("no number set");
} 

$sql = "SELECT name FROM book WHERE id =$id";
$result = $conn->query($sql);

$data = $result->fetchObject();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="skeleton.css">
</head>

<body>
    <h1><?php echo $data->name; ?></h1>
</body>

</html>