<?php 
$fullname = "";
$username = "";
$email = "";
$password = "";
$confirmpassword = "";
$error = "";
$registered = false;

$fixedUsername = "Amritanshu";
$fixedPassword = "pass";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];

    // Basic validation
    if ($fullname == "" || $username == "" || $email == "" || $password == "" || $confirmpassword == "") {
        $error = "Write all fields";
    } else if (strlen($password) < 6) {
        $error = "Password less than 6 characters";
    } else if ($password != $confirmpassword) {
        $error = "Password and Confirm Password do not match";
    } else if ($username != $fixedUsername || $password != $fixedPassword) {
        $error = "Invalid username or password";
    } else {
        $registered = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Registration & Login</title>
    <style>
        label, input, button { display: block; margin: 8px 0; }
        input { padding: 8px; width: 300px; }
        .error { color: red; margin: 12px 0; }
        table { border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
    </style>
</head>
<body>

<h1>Registration and Login Form</h1>

<form method="post" action="">
    <label>Full Name:</label>
    <input type="text" name="fullname" placeholder="Enter Full Name" value="<?php echo $fullname; ?>">

    <label>Username:</label>
    <input type="text" name="username" placeholder="Enter Username" value="<?php echo $username; ?>">

    <label>Email:</label>
    <input type="text" name="email" placeholder="Enter Email" value="<?php echo $email; ?>">

    <label>Password:</label>
    <input type="password" name="password" placeholder="Enter Password">

    <label>Confirm Password:</label>
    <input type="password" name="confirmpassword" placeholder="Confirm Password">

    <button type="submit">Submit</button>
</form>

<?php 
if ($error != "") {
    echo "<div class='error'>$error</div>";
}

if ($registered) {
    echo "<h2>Welcome, $username is logged in!</h2>";
    echo "<h3>Registered Information:</h3>";
    echo "<table>";
    echo "<tr><th>Full Name</th><th>Username</th><th>Email</th></tr>";
    echo "<tr><td>$fullname</td><td>$username</td><td>$email</td></tr>";
    echo "</table>";
}
?>

</body>
</html>
