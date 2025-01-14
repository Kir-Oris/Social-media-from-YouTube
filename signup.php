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

<?php
    $title = "My book | Signup";
    require_once "includes/head.php";
?>

<body class="signup-body">
    <?php 
        $nameButton = "Log In";
        require_once "includes/headerSL.php";
    ?>

    <div class="signup-panel">
        Sign up to Mybook<br><br>

        <form method="post" action="">
            <input value="<?php echo $first_name; ?>" name="first_name" type="text" class="signup-text" placeholder="First name"><br><br>
            <input value="<?php echo $last_name; ?>" name="last_name" type="text" class="signup-text" placeholder="Last name"><br><br>
            
            <select class="signup-select" name="gender">
                <option><?php echo $gender ?></option>
                <option value="" disabled selected hidden>Gender</option>
                <option>Male</option>
                <option>Female</option>
            </select><br><br>

            <input value="<?php echo $email ?>" name="email" type="text" class="signup-text" placeholder="Email"><br><br>

            <input name="password" type="password" class="signup-text" placeholder="Password"><br><br>
            <input name="password2" type="password" class="signup-text" placeholder="Retype Password"><br><br>
            
            <input type="submit" class="signup-button2" value="Sign up"><br><br><br>
        </form>
    </div>
</body>
</html>