<?php
  class User {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    //************ register user *************
    public function register($data){
        
      
//         $this->db->query('INSERT INTO users (prénom,nom,téléphone,email,motdepasse,roleuser,image) VALUES (:prénom,:nom,:téléphone,:email,:motdepasse,:roleuser,:image)');
// $this->db->bind(':prénom', $data['name']);
// $this->db->bind(':nom', $data['userlastname']);
// $this->db->bind(':téléphone', $data['phoneNumber']);
// $this->db->bind(':email', $data['email']);
// $this->db->bind(':motdepasse', $data['password']);
// $this->db->bind(':roleuser', $data['roleuser']);
// $this->db->bind(':image', $data['product_picture']);
$this->db->query('INSERT INTO users (prénom, nom, téléphone, email, motdepasse, roleuser, image) VALUES (?, ?, ?, ?, ?, ?, ?)');
$this->db->bind($data['name']);
$this->db->bind($data['userlastname']);
$this->db->bind($data['phoneNumber']);
$this->db->bind($data['email']);
$this->db->bind($data['password']);
$this->db->bind($data['roleuser']);
$this->db->bind($data['product_picture']);



        if($this->db->execute()){
            return true;

        }else {
            return false;
        }

    }

// echo '<pre>';
// print_r($this->db->getParams());
// echo '</pre>';

    // ******************Find user by email*******
    public function findUserByEmail($email){
      $this->db->query('SELECT * FROM users WHERE email = :email');
      $this->db->bind(':email', $email);

      $row = $this->db->single();

      // Check row
      if($this->db->rowCount() > 0){
        return true;
      } else {
        return false;
      }
    }
  }