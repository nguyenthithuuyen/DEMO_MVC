<?php


namespace App\Model;


class UserDB
{
    protected $dbConnect;

    public function __construct()
    {
        $db = new DBConnect();
        $this->dbConnect = $db->connect();
    }

    public function getAll()
    {
        $sql = 'SELECT *FROM authors';
        $stmt = $this->dbConnect->query($sql);
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $user = new User($item['id'], $item['first_name'], $item['last_name'], $item['email'], $item['birthdate']);
            array_push($arr, $user);
        }
        return ($arr);
    }

    public function add($user)
    {

        $sql = "INSERT INTO `authors`(`id`, `first_name`, `last_name`, `email`, `birthdate`) VALUES (? ,?,? ,?, ?)";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1, $user->getId());
        $stmt->bindParam(2, $user->getFirstName());
        $stmt->bindParam(3, $user->getLastName());
        $stmt->bindParam(4, $user->getEmail());
        $stmt->bindParam(5, $user->getBirthday());
        $stmt->execute();
    }
    function update($user) {
        $sql = "UPDATE `authors` SET `first_name`=:firstname,`last_name`=:lastname,`email`=:mail,`birthdate`=:birth WHERE id=:id";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(":id", $user->getId());
        $stmt->bindParam(":firstname", $user->getFirstName());
        $stmt->bindParam(":lastname", $user->getLastName());
        $stmt->bindParam(":mail", $user->getEmail());
        $stmt->bindParam(":birth", $user->getBirthday());
        $stmt->execute();

    }
    function delete($id) {
        $sql = "DELETE FROM `authors` WHERE id = :id ";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }
    function getUser($id) {
        $sql = "SELECT * FROM authors WHERE id = :id ";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $data = $stmt->fetch();
        $user = new User($data["id"],$data["first_name"], $data["last_name"], $data["email"], $data["birthdate"]);
        return $user;
    }


}