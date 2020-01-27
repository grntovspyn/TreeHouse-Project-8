<?php
//task Model
namespace App\Model;

use \Exception;

class Task extends Database
{
    public function getTasks($where = null)
    {
        
        $query = 'SELECT * FROM tasks ';
        if (!empty($where)) {
            $query .= "WHERE {$where}";
        }
        $query .= ' ORDER BY id';

        try {
            $statement = $this->db->prepare($query);
            $statement->execute();
            $tasks = $statement->fetchAll();
        } catch (Exception $e) {
            echo 'Error!: '.$e->getMessage().'<br />';

            return false;
        }

        return $tasks;
    }

    public function getIncompleteTasks()
    {
        return $this->getTasks('status=0');
    }

    public function getCompleteTasks()
    {
        return $this->getTasks('status=1');
    }

    public function getTask($task_id)
    {
        
        try {
            $statement = $this->db->prepare('SELECT id, task, status FROM tasks WHERE id=:id');
            $statement->bindParam('id', $task_id);
            $statement->execute();
            $task = $statement->fetch();
        } catch (Exception $e) {
            echo 'Error!: '.$e->getMessage().'<br />';

            return false;
        }

        return $task;
    }

    public function createTask($data)
    {
        

        try {
            $statement = $this->db->prepare('INSERT INTO tasks (task, status) VALUES (:task, :status)');
            $statement->bindParam('task', $data['task']);
            $statement->bindParam('status', $data['status']);
            $statement->execute();
        } catch (Exception $e) {
            echo 'Error!: '.$e->getMessage().'<br />';

            return false;
        }

        return $this->getTask($this->db->lastInsertId());
    }

    public function updateTask($data)
    {
        

        try {
            $this->getTask($data['task_id']);
            $statement = $this->db->prepare('UPDATE tasks SET task=:task, status=:status WHERE id=:id');
            $statement->bindParam('task', $data['task']);
            $statement->bindParam('status', $data['status']);
            $statement->bindParam('id', $data['task_id']);
            $statement->execute();
        } catch (Exception $e) {
            echo 'Error!: '.$e->getMessage().'<br />';

            return false;
        }

        return $this->getTask($data['task_id']);
    }

    public function updateStatus($data)
    {
        

        try {
            $this->getTask($data['task_id']);
            $statement = $this->db->prepare('UPDATE tasks SET status=:status WHERE id=:id');
            $statement->bindParam('status', $data['status']);
            $statement->bindParam('id', $data['task_id']);
            $statement->execute();
        } catch (Exception $e) {
            echo 'Error!: '.$e->getMessage().'<br />';

            return false;
        }

        return $this->getTask($data['task_id']);
    }

    public function deleteTask($task_id)
    {
        

        try {
            $this->getTask($task_id);
            $statement = $this->db->prepare('DELETE FROM tasks WHERE id=:id');
            $statement->bindParam('id', $task_id);
            $statement->execute();
        } catch (Exception $e) {
            echo 'Error!: '.$e->getMessage().'<br />';

            return false;
        }

        return true;
    }
}
