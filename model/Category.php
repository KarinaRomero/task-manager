<?php
class Category{
    private $id; 
    private $color; 
    private $name; 
    private $importance;

    function __construct($id, $color, $name, $importance)
    {
        $this->id = $id;
        $this->color = $color;
        $this->name = $name;
        $this->importance = $importance;
    }
    public function get_id(){
        return $this->id;
    }
    public function get_color(){
        return $this->color;
    }
    public function set_color($color){
        $this->color = $color;
    }
   
    public function get_name(){
        return $this->name;
    }
    public function set_name($name){
        $this->name = $name;
    }

    public function get_importance(){
        return $this->importance;
    }
    public function set_importance($importance){
        $this->importance = $importance;
    }
}
?>