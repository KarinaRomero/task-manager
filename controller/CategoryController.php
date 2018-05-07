<?php
require("../data_base/CategoryConnectionDB.php");
require_once("../model/Category.php");

$category_model = new CategoryConnectionDB();
$category = new Category(null,htmlentities(addslashes($_POST["colorInput"])),htmlentities(addslashes($_POST["nameInput"])),htmlentities(addslashes($_POST["importanceInput"])));

$success = $category_model->add_category($category);

if(!$success){
    echo ("No se pudo agregar!");
}else{
    session_start();
    header("location:../view/ShowCategories.php");
}

/*$id=31;
$category = new Category($id,"black", "baja","5");
$success = $category_model->update_category($category);

if(!$success){
    echo ("No se pudo agregar!");
}else{
    session_start();
    header("location:../view/ShowCategories.php");
}*/




?>
