<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <title>Insert Actor Success</title>
    <link rel="stylesheet" href="insert.css">
</head>

<body>
<?php
    require 'conn.php';
 
    $sql_update = "INSERT INTO member(aid, aname, alastname, address, telephone)
                   VALUES ('{$_POST['aid']}',
                            '{$_POST['aname']}',
                            '{$_POST['alastname']}',
                            '{$_POST['address']}',
                            '{$_POST['telephone']}')";
 
    $result = $conn->query($sql_update);
 
    if (!$result) {
        die("Error God Damn it: " . $conn->error);
    } else {
        echo "Insert Success <br>";
        header("refresh: 1; url=mainmenu.php");
    }
?>
 
</body>
</html>





