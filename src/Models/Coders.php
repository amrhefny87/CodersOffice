<?php


namespace App\Models;


use App\Database;
use DateTime;

class Coders
{
    private ?int $id;
    private string $coder;
    private datetime $date_time;
    private string $issue;
    private $database;
    private $table = "appointments";

    public function __construct(datetime $date_time = '', string $coder = '', string $issue = '', int $id = null)
    {
        $this->name = $name;
        $this->id = $id;
        $this->created_at = $created_at;

        if (!$this->database) {
            $this->database = new Database();
        }
    }

    public function getName()
    {
        return $this->name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function rename($name)
    {
        $this->name = $name;
    }

    public function save(): void
    {
        $this->database->mysql->query("INSERT INTO `{$this->table}` (`name`) VALUES ('$this->name');");
    }

    public function all()
    {
        $query = $this->database->mysql->query("select * FROM appointments");
        $studentsArray = $query->fetchAll();
        $studentList = [];
        foreach ($studentsArray as $student) {
            $coderItem = new Coders ($coder["date_time"], $coder["coder"], $coder["issue"], $coder["id"]);
            array_push($studentList, $coderItem);
        }

        return $studentList;
    }

    public function deleteById($id)
    {
        $query = $this->database->mysql->query("DELETE FROM `students` WHERE `students`.`id` = {$id}");
    }

    public function delete()
    {
        $query = $this->database->mysql->query("DELETE FROM `students` WHERE `students`.`id` = {$this->id}");
    }

    public function findById($id)
    {
        $query = $this->database->mysql->query("SELECT * FROM `students` WHERE `id` = {$id}");
        $result = $query->fetchAll();

        return new Student($result[0]["name"], $result[0]["id"], $result[0]["created_at"]);
    }

    public function UpdateById($data, $id)
    {
        $this->database->mysql->query("UPDATE `students` SET `name` =  '{$data["name"]}' WHERE `id` = {$id}");
    }

    public function Update()
    {
        $this->database->mysql->query("UPDATE `students` SET `name` =  '{$this->name}' WHERE `id` = {$this->id}");
    }
}
