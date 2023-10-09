<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>STEVE</title>
    <style>
        form input{
            margin-bottom: 10px;
            padding: 10px;
        }
        form{
            background: red;
        }
    </style>
</head>
<body>
    <h1>my name is moch</h1>

    <!-- method="POST" action="" -->
<form>
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
    echo $_POST['password']."<br/>";
}


?>
    
</body>
</html>
