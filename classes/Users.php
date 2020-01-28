<?php
namespace App\Model;

class User extends Database
{
    public function getAllUsers()
    {
        $sql = "SELECT * FROM users";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function changeRole($userId, $roleId)
    {
        $sql = "UPDATE users SET role_id = :roleId WHERE id = :userId";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam('roleId', $roleId);
        $stmt->bindParam('userId', $userId);
        $stmt->execute();
        return $this->findUserById($userId);
    }
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
    public function findUserById($userId)
    {
        $sql = "SELECT * FROM users WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam('id', $userId);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function updatePassword($password, $userId)
    {
        $sql = "UPDATE users SET password = :password WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam('password', $password);
        $stmt->bindParam('id', $userId);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

}