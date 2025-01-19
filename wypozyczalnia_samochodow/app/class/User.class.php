<?php

namespace app\class;

class User {
    public $id;
    public $email;
    public $roles;
    public $login;

    public function __construct($id, $email, $roles, $login) {
        $this->id = $id;
        $this->email = $email;
        $this->roles = $roles;
        $this->login = $login;
    }
}

?>
