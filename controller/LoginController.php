<?php
require("../data_base/LoginModel.php");
require("../view/UserProfile.php");
try {
    $login = new LoginModel();

    $user = htmlentities(addslashes($_POST["emailInput"]));
    $password = htmlentities(addslashes($_POST["passwordInput"]));
    
    $coutn_result = $login->init_login($email, $password);

    if ($coutn_result != 0) {
        session_start();
        $_SESSION["user"] = $_POST["emailInput"];
        header("location:../view/UserProfile.php");

    } else {
        header("location:index.php");
    }
} catch (Exception $e) {
    echo "Error al comprobar tu cuenta:  ", $e->getMessage(), "Linea: ", $e->getLine();
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Poo consultas preparadas</title>
<style>
</style>

</head>
<body>


</body>
</html>