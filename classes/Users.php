<?php
namespace App\Model;

class User extends Database
{
    public function createUser($username, $password)
    {
        $sql = 'INSERT INTO users (username, password) VALUES (:username, :password)';
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam('username', $username);
        $stmt->bindParam('password', $password);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return $this->checkUsername($username);
        }
    }
        
    public function checkUsername($username)
    {


        $sql = "SELECT * FROM users WHERE username = :username";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam('username', $username);
        $stmt->execute();
        return $stmt->fetch();
    }
}