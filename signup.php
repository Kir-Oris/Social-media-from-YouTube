<?php

    include("classes/connect.php");
    include("classes/signup.php");

    $first_name = "";
    $last_name = "";
    $gender = "";
    $email = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $signup = new Signup();
        $result = $signup->evaluate($_POST);

        if($result != "") {
            echo "<div style='text-align: center; font-size: 12px; color: white; background: grey;'>";
            echo "<br>The following errors occured<br><br>";
            echo $result;
            echo "</div>";
        }

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My book | Signup</title>
</head>

<style>
    .bar {

        height: 100px;
        background-color: rgb(59, 89, 152);
        color: #d9dfeb;
        padding: 4px;
    }

    .signup_button {

        background: #42b72a;
        width: 70px;
        text-align: center;
        padding: 4px;
        border-radius: 4px;
        float: right;
    }

    .bar2 {

        background: white; 
        width: 800px;
        margin: auto;
        margin-top: 50px;
        padding: 10px;
        padding-top: 50px;
        text-align: center;
        font-weight: bold;
    }

    .text {

        height: 40px;
        width: 300px;
        border-radius: 4px;
        border: solid 1px #ccc;
        padding: 4px;
        font-size: 14px;
    }

    .button {

        width: 300px;
        height: 40px;
        border-radius: 4px;
        border: none;
        background: rgb(59, 89, 152);
        color: white;
    }
</style>

<body style="font-family: tahoma; background-color: #e9ebee">
    <div class="bar">
        <div style="font-size: 40px;">Mybook</div>
        <div class="signup_button">Log in</div>
    </div>

    <div class="bar2">
        Sign up to Mybook<br><br>

        <form method="post" action="">
            <input value="<?php echo $first_name; ?>" name="first_name" type="text" class="text" placeholder="First name"><br><br>
            <input value="<?php echo $last_name; ?>" name="last_name" type="text" class="text" placeholder="Last name"><br><br>

            <span style="font-weight: normal;">Gender:</span><br>
            <select class="text" name="gender">
                <option><?php echo $gender ?></option>
                <option>Male</option>
                <option>Female</option>
            </select><br><br>

            <input value="<?php echo $email ?>" name="email" type="text" class="text" placeholder="Email"><br><br>

            <input name="password" type="password" class="text" placeholder="Password"><br><br>
            <input name="password2" type="password" class="text" placeholder="Retype Password"><br><br>
            
            <input type="submit" class="button" value="Sign up"><br><br><br>
        </form>
    </div>
</body>
</html>