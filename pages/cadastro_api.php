<?php

class CD1_API{
    private $error = false;

    function request ($endpoint = '', $params = array() ){
        $url = "https://reqres.in/api/users" . $endpoint . "?page=1";

    }

    function is_error(){
        return $this->error;
    } 

    function cadastro(){
        $data = $this->request('users?page=1');

        if (!empty($data) && is_array($data['id']['email']['first_name']['last_name']['avatar'])){
            $this->error = false;
            return $data['id']['email']['first_name']['last_name']['avatar'];    
        }else {
            $this->error = true;
            return false;
        }
    }
}

?>