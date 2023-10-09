<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STEVE</title>
</head>
<body>
    <h1>my name is moch</h1>

<form method="POST" action="">
    <label>Name:</label>
    <input type="text" name="name"><br>
    <label>Email:</label>
    <input type="text" name="email"><br>
    <label>Phone:</label>
    <input type="number" name="phone"><br>
    <label>password</label>
    <input type="password" name="password"><br>
    <button name ="send info">submit</button>

</form>

<?php
if(isset($_POST['send_info'])){
    echo $_POST['name']."<br/>";
    echo $_POST['email']."<br/>";
    echo $_POST['phone']."<br/>";
    echo $_POST['']."<br/>";
}


?>
    
</body>
</html>
