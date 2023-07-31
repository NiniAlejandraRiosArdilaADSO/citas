<?php

namespace Adso\model;

use Adso\libs\Database;

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
        $sql = "SELECT * FROM users";
        $stm = $this->connection->prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }
}
