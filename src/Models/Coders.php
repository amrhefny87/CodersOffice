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

    public function rename($coder,$issue)
    {
        $this->coder = $coder;
        $this->issue = $issue;
        
    }

    public function save(): void
    {

        /*$this->database->mysql->query("INSERT INTO `{$this->table}` (`id`, `coder`, `issue`, `date_time`) VALUES (NULL, `{$this->coder}`, `{$this->issue}`, '')");*/
        $this->database->mysql->query("INSERT INTO `{$this->table}` (`coder`, `issue`) VALUES ('$this->coder','$this->issue');");
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


    public function delete()
    {
        
        $query = $this->database->mysql->query("DELETE FROM `{$this->table}` WHERE `{$this->table}`.`id` = {$this->id}");
    }

    public function findById($id)
    {
        $query = $this->database->mysql->query("SELECT * FROM `{$this->table}` WHERE `id` = {$id}");
        $result = $query->fetchAll();

        return new Coders($result[0]["id"], $result[0]["coder"], $result[0]["issue"] , $result[0]["date_time"]);
    }


    public function Update()
    {
        $this->database->mysql->query("UPDATE `{$this->table}` SET `coder` =  '{$this->coder}', `issue` =  '{$this->issue}' WHERE `id` = {$this->id}");
    }
}
