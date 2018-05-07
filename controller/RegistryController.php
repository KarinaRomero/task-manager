<?php
require("../data_base/RegistryModel.php");
require("../index.php");

$email = htmlentities(addslashes($_POST["emailInput"]));
$password = htmlentities(addslashes($_POST["passwordInput"]));
$confirm_password = htmlentities(addslashes($_POST["confirmpasswordInput"]));
if (strcmp($password, $confirm_password) !== 0) {
    echo 'Password diferent';
}else{
    $password_hash = password_hash($password, PASSWORD_DEFAULT, array("cost"=>12));
    $registry = new RegistryModel();

    $is_user= $registry->add_registry($email, $password_hash);
    
    if($is_user == true){
        echo($is_user);
        /*session_start();
        $_SESSION["user"]=$_POST["userNameInput"];
        header("location:../view/UserProfile.php");*/
    }else{
        echo($is_user);
        //header("location:../view/index.php");
    } 
}



?>