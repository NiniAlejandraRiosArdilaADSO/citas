<?php

namespace app\model;

use app\libs\Database;

class UserModel
{

    protected $db;
    protected $connection;

    function __construct()
    {
        $this->db           = new Database();
        $this->connection   = $this->db->getConnection();
    }

    function getUsers()
    {
        $sql = "SELECT * FROM admon WHERE correo = :user AND clave :password";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(':user',$user);
        $stm->bindParam(':password',$password);
        $stm->execute();
        return $stm->fetch();
    }
}
