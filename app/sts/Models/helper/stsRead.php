<?php


namespace Sts\Models\helper;

use PDO;
use PDOException;

if (!defined('C7E3L8K9E5')) {
    header("Location: /site");
    die("Not found");
}


class StsRead extends StsConn
{
    private string $select;
    private ?array $result = [];
    private object $query;
    private object $conn;
    private array $values = [];

    function getResult(): ?array
    {
        return $this->result;
    }

    public function exeRead(string $table, ?string $terms = null,  ?string $parseString = null)
    {
        $this->parseString($parseString);
        $this->select = "SELECT * FROM   {$table} {$terms}";
        // var_dump($this->select);
        $this->exeInstruction();
    }
    public function fullRead(string $query, ?string $parseString = null)
    {
        $this->select = $query;
        // var_dump($this->select);
        $this->parseString($parseString);
        $this->exeInstruction();
    }
    private function exeInstruction()
    {
        $this->connection();
        try {
            $this->exeParameter();
            // var_dump($this->query);
            $this->query->execute();
            $this->result =  $this->query->fetchAll();
        } catch (PDOException $error) {
            $this->result = null;
        }
    }

    private function connection()
    {
        $this->conn = $this->connectDb();
        $this->query =  $this->conn->prepare($this->select);
        $this->query->setFetchMode(PDO::FETCH_ASSOC);
    }

    private function exeParameter()
    {
        if ($this->values) {

            foreach ($this->values as $link => $value) {
                if (($link == 'limit') || ($link == 'offset') || ($link == 'id')) {
                    $value =  (int) $value;
                }

                $this->query->bindValue(":{$link}", $value, (is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR));
            }
        }
    }

    private function parseString(?string $parseString = null)
    {
        if (!empty($parseString)) {
            parse_str($parseString, $this->values);
            // var_dump($this->values);
        }
    }
}
