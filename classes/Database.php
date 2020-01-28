<?php
namespace App\Model;

use \PDO;
use \Exception;

class Database
{
    protected $database;

    public function __construct()
    {
        try {
            $db = new PDO('sqlite:'.__DIR__.'/../inc/todo.db');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db = $db;
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }

}