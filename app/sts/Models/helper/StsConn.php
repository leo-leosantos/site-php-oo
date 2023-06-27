<?php

namespace Sts\Models\helper;

use PDO;
use PDOException;

if (!defined('C7E3L8K9E5')) {
    header("Location: /site");

    die("Not found");
}

abstract class StsConn
{
    private string $host = HOST;
    private string $user = USER;
    private string $pass = PASS;
    private string $dbname = DBNAME;
    private int $port = PORT;
    private object $connect;


    public function connectDb(): object
    {
        try {
            return $this->connect  = new  PDO(
                "mysql:host={$this->host};port={$this->port};dbname=" . $this->dbname,
                $this->user,
                $this->pass
            );
        } catch (PDOException $err) {
            die($err->getMessage());
        }
    }
}
