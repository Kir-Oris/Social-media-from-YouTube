<?php
    $title = "My book | Log in";
    require_once "includes/head.php";
?>

<body class="login-body">
    <?php 
        $nameButton = "Sign Up";
        require_once "includes/headerSL.php";
    ?>

    <div class="login-panel">
        Log in to Mybook<br><br>

        <input type="text" class="login-text" placeholder="Email"><br><br>
        <input type="password" class="login-text" placeholder="Password"><br><br>

        <input type="submit" class="login-button2" value="Log in"><br><br><br>
    </div>
</body>
</html>