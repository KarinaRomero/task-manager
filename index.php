<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<style>
</style>
</head>
<body>
<div>
    <div>
        <h1>Login</h1>
        <form action= "controller/LoginController.php" method="post">
            <label>Email: <input type="text" name="emailInput"></input></label>
            <label>Password : <input type="password" name="passwordInput"></input></label>
            <input type="submit" name = "loginButton" value="Login"></input>
            
        </form>
     </div>
     <!--<div>
        <h1>Registry</h1>
        <form action= "controller/RegistryController.php" method="post">
            <label>Email : <input type="text" name="emailInput"></input></label>
            <label>Password : <input type="password" name="passwordInput"></input></label>
            <label>Confirm password : <input type="password" name="confirmpasswordInput"></input></label>
            <input type="submit" name = "registryButton" value="Registry"></input>
        </form>
     </div>-->
</div>

</body>
</html>