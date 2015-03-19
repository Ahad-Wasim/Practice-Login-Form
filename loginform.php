<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
<style>
body{
    height: 100vh;
    width: 100vw;
    position: relative;
}
.login_form{
    width: 40%;
    height: 40%;
    margin: 0 auto;
    position: relative;
    top: 50%;
    transform: translateY(-50%);
    background-color: lightgray;
    border: 2px double gray;
}
</style>
</head>
<body>
    


<div class="login_form">
    <form action="login.php" method="post">  
        <input type = 'text' name = 'username'>   just type in username = awasim 
        <input type = 'password' name = 'password'>   passoword = password
        <button>Log In</button>
    </form>
</div>



</body>
</html>