<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <title>Insert dvd Success</title>
    <link rel="stylesheet" href="insert.css">
</head>

<body>
<?php
    require 'conn.php';
 
    $sql_update = "INSERT INTO dvd(did, dname, time, date)
                   VALUES ('{$_POST['did']}',
                            '{$_POST['dname']}',
                            '{$_POST['time']}',
                            '{$_POST['date']}')";
 
    $result = $conn->query($sql_update);
 
    if (!$result) {
        die("Error God Damn it: " . $conn->error);
    } else {
        echo "Insert Success <br>";
        header("refresh: 1; url=mainmenudvd.php");
    }
?>
 
</body>
</html>





