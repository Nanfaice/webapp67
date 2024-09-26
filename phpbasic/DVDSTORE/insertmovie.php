<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is insertmovie webpage</title>
    <link rel="stylesheet" href="insert.css">
</head>
<style>
/* insert.css */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f8f9fa; 
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

div {
    display: flex;
    flex-direction: column;
    align-items: center;
}

form {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); 
    width: 300%; 
    max-width: 400px; 
    box-sizing: border-box;
}

form p {
    margin-bottom: 15px;
}

label {
    font-size: 14px;
    color: #495057;
    margin-bottom: 5px;
    display: block;
}

input[type="text"], input[type="date"] { 
    width: 100%;
    padding: 10px;
    font-size: 14px;
    border: 1px solid #ced4da;
    border-radius: 5px;
    box-sizing: border-box;
    background-color: #e9ecef;
}

input[type="text"]:focus, input[type="date"]:focus { 
    border-color: #007bff;
    outline: none;
}

button {
    width: 100%;
    padding: 12px;
    font-size: 16px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #0056b3;
}
</style>

<body>
    <div>
        <h1>Insert Movie</h1>
        <form method="post" action="insertmoviesuccess.php">
            <p>
                <label for="did">ID</label>
                <input type="text" id="did" name="did">
            </p>
            <p>
                <label for="dname">ชื่อ</label>
                <input type="text" id="dname" name="dname">
            </p>
            <p>
                <label for="time">ระยะเวลา</label>
                <input type="time" id="time" name="time">
            </p>
            <p>
                <label for="วdate">วันที่</label>
                <input type="date" id="date" name="date"> 
            </p>
            <button type="submit">บันทึก</button> 
        </form>
    </div>
</body>
</html>
