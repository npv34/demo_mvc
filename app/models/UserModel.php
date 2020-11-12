<?php

namespace app\models;


class UserModel extends BaseModel implements UserInterface
{

    function getAll()
    {
        $sql = 'SELECT * FROM users';
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll();
    }

    function store($user) {
        //code them data vao database
    }

    function delete($id) {
        $sql = 'Delete FROM users WHERE id='. $id;
        $this->conn->query($sql);
    }
}