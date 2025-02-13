<?php

namespace app\models;

include_once('../../vendor/autoload.php');

use app\models\Utilisateur;
use PDO;
use PDOException;

class Message {
    private $id;
    private $Contenu;
    private $Receive; 
    private Utilisateur $sender;
    private $Status;
    private $Date;

    private $db;

    public function __construct(PDO $db)
    {
        $this->db =   Database::getInstance()->getConnection();;
        $this->sender = new Utilisateur();
    }

    public function getId() {
         return $this->id; 
        }
    public function setId($id): void {
         $this->id = $id;
         }

    public function getContenu() { 
        return $this->Contenu; 
    }
    public function setContenu($Contenu): void { 
        $this->Contenu = $Contenu; 
    }

    public function getReceive() { 
        return $this->Receive; 
    }
    public function setReceive($Receive): void { 
        $this->Receive = $Receive; 
    }

    public function getSender(): Utilisateur { 
        return $this->sender; 
    }
    public function setSender(Utilisateur $sender): void {
         $this->sender = $sender; 
        }

    public function getStatus() { 
        return $this->Status; 
    }
    public function setStatus($Status): void {
         $this->Status = $Status; 
        }

    public function getDate() {
         return $this->Date; 
        }
    public function setDate($Date): void {
         $this->Date = $Date; 
        }
    public function create(): bool
    {
        try {
            $query = "INSERT INTO messages (contenu, receive, sender, status, date) VALUES (:contenu, :receive, :sender, :status, :date)";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':contenu', $this->getContenu());
            $stmt->bindValue(':receive', $this->getReceive());
            $stmt->bindValue(':sender', $this->getSender()->getId()); // Assuming Utilisateur has getId()
            $stmt->bindValue(':status', $this->getStatus());
            $stmt->bindValue(':date', $this->getDate());

            return $stmt->execute();
        } catch (PDOException $e) {
            return false;
        }
    }
    public function read($id)
    {
        try {
            $query = "SELECT * FROM messages WHERE id = :id";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            return null;
        }
    }
    public function update(): bool
    {
        try {
            $query = "UPDATE messages SET contenu = :contenu, receive = :receive, sender = :sender, status = :status, date = :date WHERE id = :id";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':id', $this->getId());
            $stmt->bindValue(':contenu', $this->getContenu());
            $stmt->bindValue(':receive', $this->getReceive());
            $stmt->bindValue(':sender', $this->getSender()->getId());
            $stmt->bindValue(':status', $this->getStatus());
            $stmt->bindValue(':date', $this->getDate());

            return $stmt->execute();
        } catch (PDOException $e){
            return false;
        }
    }
    public function delete(): bool
    {
        try {
            $query = "DELETE FROM messages WHERE id = :id";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':id', $this->getId());

            return $stmt->execute();
        } catch (PDOException $e) {
            return false;
        }
    }
    public function getAll()
    {
        try {
            $query = "SELECT * FROM messages";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            return [];
        }
    }
}
