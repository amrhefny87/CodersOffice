<?php


namespace App\Models;


use App\Database;
use DateTime;
use PhpParser\Internal\PrintableNewAnonClassNode;

class Coders
{
    private ?int $id;
    private string $coder;
    private ?string $date_time;
    private string $issue;
    private $database;
    private $table = "appointments";

    public function __construct( int $id = null, string $coder = '', string $issue = '', string $date_time = '')
    {
        $this->date_time = $date_time;
        $this->coder = $coder;
        $this->issue = $issue;
        $this->id = $id;


        if (!$this->database) {
            $this->database = new Database();
        }
    }

    public function getdate_time()
    {
        return $this->date_time;
    }

    public function getissue()
    {
        return $this->issue;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getcoder()
    {
        return $this->coder;
    }

    public function rename($name)
    {
        $this->name = $name;
    }

    public function save(): void
    {
        $this->database->mysql->query("INSERT INTO `{$this->table}` (`id`, `coder`, `issue`, `date_time`) VALUES ('NULL','$this->coder','$this->issue','NULL');");
    }

    public function all()
    {
        $query = $this->database->mysql->query("select * FROM {$this->table}");
        $codersArray = $query->fetchAll();
                
        $coderList = [];
        
        foreach ($codersArray as $coder) {
            $coderItem = new Coders ($coder["id"], $coder["coder"], $coder["issue"], $coder["date_time"]);
            
            array_push($coderList, $coderItem);
        }
        
        return $coderList;
    }

    public function deleteById($id)
    {
        $query = $this->database->mysql->query("DELETE FROM `students` WHERE `students`.`id` = {$id}");
    }

    public function delete()
    {
        $query = $this->database->mysql->query("DELETE FROM `coders` WHERE `coders`.`id` = {$this->id}");
    }

    public function findById($id)
    {
        $query = $this->database->mysql->query("SELECT * FROM `students` WHERE `id` = {$id}");
        $result = $query->fetchAll();

        return new Coders($result[0]["name"], $result[0]["id"], $result[0]["created_at"]);
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
