<?php

namespace Sts\Models\helper;

use PDO;
use PDOException;

if (!defined('C7E3L8K9E5')) {
    header("Location: /site");

    die("Not found");
}


class StsCreate extends StsConn
{
    private string $table;
    private array $data;
    private ?string $result = null;
    private object $insert;
    private string $query;
    private object $conn;


    function getResult(): ?string
    {
        return $this->result;
    }

    public function exeCreate(string $table, array $data): void
    {
        $this->table =  $table;
        $this->data =  $data;

        $this->exeReplaceValues();
    }

    private function exeReplaceValues(): void
    {
        $columns = implode(', ', array_keys($this->data));
        $values = ':' . implode(', :', array_keys($this->data));

        $this->query = "INSERT INTO {$this->table} ($columns) VALUES ($values)";

        $this->exeInstruction();
    }

    private function exeInstruction(): void
    {
        $this->connection();
        try {
            $this->insert->execute($this->data);
            $this->result = $this->conn->lastInsertId();
        } catch (PDOException $error) {
            //echo $error->getMessage();
            $this->result = null;
        }
    }

    private function connection(): void
    {
        $this->conn = $this->connectDb();

        $this->insert =  $this->conn->prepare($this->query);
    }
}
