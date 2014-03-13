<?php

class Account extends AppModel {
    public function getAccountByUsernameAndPassword($username, $password) {
        return $this->where(array(
            'username'      => $username,
            'password_hash' => md5($password),
        ))->first();
    }
}