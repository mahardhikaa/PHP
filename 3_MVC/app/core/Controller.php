<?php

class Controller {
    public function view($address, $data = []){
        require_once "../app/views/" . $address . ".php";
    }
}

?>