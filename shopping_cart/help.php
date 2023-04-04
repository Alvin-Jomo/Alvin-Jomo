<?php
// Connect to the database
$db = mysqli_connect("localhost", "root", "", "shop_db");

// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
exit();
}

// Prepare SQL query
$query = "INSERT INTO comments (name, email, message) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($db, $query);
mysqli_stmt_bind_param($stmt, "sss", $_POST['name'], $_POST['email'], $_POST['message']);

// Execute SQL query
if (mysqli_stmt_execute($stmt)) {
echo "Thank you for contacting us!";
} 
// Close database connection
mysqli_stmt_close($stmt);
mysqli_close($db);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Customer Help Support</title>
<style>
body {
font-family: Arial, sans-serif;
background-color: #F2F2F2;
background-color:whitesmoke;
}

.container {
max-width: 600px;
margin: 0 auto;
padding: 20px;
background-color: #FFFFFF;
border-radius: 5px;
box-shadow: 0px 0px 5px #999999;
}

h1 {
text-align: center;
margin-top: 0;
}

form {
display: flex;
flex-direction: column;
}

label {
font-weight: bold;
margin-bottom: 5px;
}

input[type=text], input[type=email], textarea {
padding: 10px;
margin-bottom: 15px;
border: none;
border-radius: 5px;
box-shadow: 0px 0px 5px #999999;
}

input[type=submit] {
background-color: blue;
color: #FFFFFF;
padding: 10px;
border: none;
border-radius: 5px;
box-shadow: 0px 0px 5px #999999;
cursor: pointer;
}

input[type=submit]:hover {
background-color: black;
}
</style>
</head>
<body>
<div class="container">
<h1>Contact Us</h1>
<p>If you have any questions or concerns, please feel free to contact us by filling out the form below.</p>
<form method="post" action="help.php">
<label for="name">Name</label>
<input type="text" name="name" required>

<label for="email">Email</label>
<input type="email" name="email" required>

<label for="message">Message</label>
<textarea name="message" required></textarea>

<input type="submit" value="Submit">
</form>
</div>
<h1>your request will be processed after submission</h1>
</body>
</html>



