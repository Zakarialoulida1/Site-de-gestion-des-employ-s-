<?php
class Task
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function add_task($data)
    {

        $this->db->query("INSERT INTO task(titre,deadline,status,id_user,id_project) VALUES(?,?,?,?,?)");


        $this->db->bind($data['titre']);
        $this->db->bind($data['deadline']);
        
        $this->db->bind($data['status']);
        $this->db->bind($data['id_user']);
        $this->db->bind($data['id_project']);


        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function fetch_tasks($id)
    {
        try {
            // var_dump($id);
            // die();
            $this->db->query("SELECT * FROM task WHERE id_project= $id  AND status = -1");
            $this->db->execute();
            return $this->db->resultSet();
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function fetch_tasks_doing($id)
    {
        try {
            // var_dump($id);
            // die();
            $this->db->query("SELECT * FROM task WHERE id_project= $id  AND status = 0 ");
            $this->db->execute();
            return $this->db->resultSet();
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function fetch_tasks_done($id)
    {
        try {
            // var_dump($id);
            // die();
            $this->db->query("SELECT * FROM task WHERE id_project= $id  AND status = 1 ");
            $this->db->execute();
            return $this->db->resultSet();
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
