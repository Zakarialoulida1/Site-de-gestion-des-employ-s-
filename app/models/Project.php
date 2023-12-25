<?php
class Project
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function create($data)
    {
        $this->db->query("INSERT INTO Projects (Nom_project, descrip, Date_de_debut, date_fin) 
        VALUES (?,?,?,?)");
        $this->db->bind($data['Nom_project']);
        $this->db->bind($data['descrip']);
        $this->db->bind($data['Date_de_debut']);
        $this->db->bind($data['date_fin']);
        
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function fetch_my_project($project_ID){
       
            $this->db->query("SELECT * from projects where project_ID= '$project_ID'");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            return $e->getMessage();
        }

    }
}
