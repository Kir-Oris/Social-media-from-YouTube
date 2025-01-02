<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My book | Log in</title>
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
        <div class="signup_button">Signup</div>
    </div>

    <div class="bar2">
        Login in to Mybook<br><br>

        <input type="text" class="text" placeholder="Email"><br><br>
        <input type="password" class="text" placeholder="Password"><br><br>

        <input type="submit" class="button" value="Log in"><br><br><br>
    </div>
</body>
</html>