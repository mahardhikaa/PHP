<?php

class Controller {
    public function view($address, $data = []){
        require_once "../app/views/" . $address . ".php";
    }

    public function model($model) {
        require_once "../app/models/" . $model . ".php";

        return new $model;
    }
}

?>