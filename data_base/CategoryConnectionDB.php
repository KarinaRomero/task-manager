<?php

require("ConnectionDB.php");
require_once("../model/Category.php");

class CategoryConnectionDB extends ConectionDB
{
    private $categories;

    function __construct()
    {
        parent::__construct();
    }
    /*
     *Return true if user adeed
     */
    public function add_category($category)
    {
        $succes = false;

        $consult_string = "insert into category (color, name, importance) values (?, ?, ?)";
        $result = $this->db_connection->prepare($consult_string);
        $result->bind_param("sss", $category->get_color(), $category->get_name(), $category->get_importance());
        if (!$result->execute()) {
            echo "Falló la ejecución: (" . $result->errno . ") " . $result->error;
        } else {
            $succes = true;
        }
        return $succes;
    }

    public function update_category($category)
    {
        $succes = false;
        //"update task set idtask=$id_task_update, name='$name_task_update', descrption='$description_task_update' where idtask = $id_task_update";
        $consult_string = "update category set id=?, color=?, name=?, importance=? where id=?";
        $result = $this->db_connection->prepare($consult_string);
        $result->bind_param("isssi", $category->get_id(), $category->get_color(), $category->get_name(), $category->get_importance(), $category->get_id());
        if (!$result->execute()) {
            echo "Falló la ejecución: (" . $result->errno . ") " . $result->error;
        } else {
                $succes = true;
        }
        return $succes;
    }

    public function get_category($id)
    {
        $consult_string = "select * from category where id = ? ";
        $result = $this->db_connection->prepare($consult_string);
        $result->bind_param("i", $id);
        $list = null;
        if (!$array_result = $result->get_result()) {
            echo "Falló la ejecución: (" . $result->errno . ") " . $result->error;
        } else {
            $list = $array_result->fetch_all();
        }
        return $list;
    }

    public function get_categories()
    {
        $consult_string = "select * from category";
        $result = $this->db_connection->prepare($consult_string);
        $result->execute();
        $list = null;
        if (!$array_result = $result->get_result()) {
            echo "Falló la ejecución: (" . $result->errno . ") " . $result->error;
        } else {
            $list = $array_result->fetch_all();
        }
        return $list;
    }

}

?>