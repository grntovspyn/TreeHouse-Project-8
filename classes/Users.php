<?php
namespace App\Model;

class User extends Database
{
    public function createUser($username, $password)
    {
        global $session;

        $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam('username', $username);
        $stmt->bindParam('password', $password);
        $stmt->execute();
        if($stmt->rowCount() > 0);
            $session->getFlashBag()->add('notice', 'Account Created');
            redirect('../');
    }
}