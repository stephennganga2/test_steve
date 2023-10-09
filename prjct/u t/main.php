<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm-password'];
  $student_id = $_POST['student-id'];
  $major = $_POST['major'];
  $year_of_study = $_POST['year-of-study'];
  $gender = $_POST['gender'];
  
 
  if ($password !== $confirm_password) {
    echo "<p>Passwords do not match.</p>";
    exit();
  }
  
 
  echo "<p>Thank you for registering, $name!</p>";
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <
    
</head>
<style>
  
.form-block {
  margin-bottom: 20px;
}


label {
  display: block;
  margin-bottom: 5px;
}


input[type="text"],
input[type="email"],
input[type="password"],
select {
  width: 20%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
  font-family: Arial, sans-serif;
  box-sizing: border-box;
}


input[type="radio"] {
  display: inline-block;
  margin-right: 10px;
}


input[type="submit"] {
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  font-family: Arial, sans-serif;
  cursor: pointer;
}


.success {
  color: green;
  font-weight: bold;
}
body{
  border-radius: 40px;
  color: #4CAF50;
  margin-left: 10px;
  background-color: whitesmoke;
}

h1{
  margin-left: 20%;
  color: lightgreen;
}

a {
  color: #333; 
  text-decoration: none; 
  font-weight: bold; 
  transition: color 0.3s ease; 
  padding-right: 20px;
}
.steve{
  background-color: pink;
  text-align: right;
  font-size: larger;
  
}

a:hover {
  color: #ff6600; 
}

</style>

<body>
  <h1>Welcome To our Website</h1>
  <hr>
  <div class="steve">
    <a href="contact.html">Contact</a>
    <a href="index.html">Home</a>
    <a href="about.html">About</a>
    <a href="academics.html">Academics</a>
  </div>
      

  <form method="POST">
    <div class="form-block">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
    </div>
    
    <div class="form-block">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
    </div>
    
    <div class="form-block">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
    </div>
    
    <div class="form-block">
      <label for="confirm-password">Confirm Password:</label>
      <input type="password" id="confirm-password" name="confirm-password" required>
    </div>
    
    <div class="form-block">
      <label for="student-id">Student ID:</label>
      <input type="text" id="student-id" name="student-id" required>
    </div>
    
    <div class="form-block">
      <label for="major">Major:</label>
      <select id="major" name="major">
        <option value="">Select a major</option>
        <option value="Computer Science">Computer Science</option>
        <option value="Business">Business</option>
        <option value="Engineering">Engineering</option>
        <option value="Psychology">Psychology</option>
      </select>
    </div>
    
    <div class="form-block">
      <label for="country">country:</label>
      <select id="country" name="country">
        <option value="">Select a country</option>
        <option value="1">KENYA</option>
        <option value="2">JAMAICA</option>
        <option value="3">UGANDA</option>
        <option value="4">ETHIOPIA</option>
        <option value="5">NIGERIA</option>
        <option value="6">GOLD COAST</option>
        <option value="7">SUDAN</option>
        <option value="8">LIBYA</option>
        <option value="9">MORROCO</option>
        <option value="10">ZAMBIA</option>
      </select>
    </div>
    
    <div class="form-block">
      <label for="gender">Gender:</label>
      <input type="radio" id="gender-male" name="gender" value="Male">
      <label for="gender-male">Male</label>
    <input type="radio" id="gender-female" name="gender" value="Female">
    <label for="gender-female">Female</label>
    <input type="radio" id="gender-other" name="gender" value="Other">
    <label for="gender-other">Other</label>
  </div>
  
  <input type="submit" value="Submit">
</form>

      
      
</body>
</html>
