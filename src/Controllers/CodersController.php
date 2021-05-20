<?php

namespace App\Controllers;

use App\Core\View;
use App\Database;
use App\Models\Coders;
use App\Models\Logger;
use phpDocumentor\Reflection\Location;



class CodersController
{

    private Logger $logger;

    public function __construct(Logger $logger)
    {

         $this->logger = $logger;

        if (isset($_GET["action"]) && ($_GET["action"] == "create")) {
            $this->create();
            return;
        }

        if (isset($_GET["action"]) && ($_GET["action"] == "store")) {
            $this->store($_POST);
            return;
        }

        if (isset($_GET["action"]) && ($_GET["action"] == "edit")) {
            $this->edit($_GET["id"]);
            return;
        }

        if (isset($_GET["action"]) && ($_GET["action"] == "update")) {
            $this->update($_POST, $_GET["id"]);
            return;
        }

        if (isset($_GET["action"]) && ($_GET["action"] == "delete")) {

            $this->delete($_GET["id"]);
            return;
        }

        $this->index();
    }

    public function index(): void
    {

        $coder = new Coders();
        $coders = $coder->all();
        
        new View("CodersList", ["coder" => $coders]);
    }

    public function create(): void
    {
        /*echo 'Aqui tendremos el Formulario para crear';*/
        new View("CreateCoder");
        
    }

    public function store(array $request): void
    {
        
        $newCoder = new Coders(Null,$request["coder"],$request["issue"]);

        $newCoder->save();

        $this-> logger->logCreate($newCoder);


        $this->index();
    }

    public function delete($id)
    {
        $coderHelper = new Coders();
        $coder = $coderHelper->findById($id);
        $coder->delete();


        $this-> logger->logDelete($coder);

        $this->index();
    }

    public function edit($id)
    {
        //Find Student By Id
        $coderHelper = new Coders();
        $coder = $coderHelper->findById($id);
        //Execute view with student atributes
        new View("EditCoder", ["coder" => $coder]);
    }

    public function update(array $request, $id)
    {
        // Update Student By ID
        $coderHelper = new Coders();
        $coder = $coderHelper->findById($id);
        $coder->rename($request["coder"],$request["issue"]);
        $coder->update();
        
        $this-> logger->logUpdate($coder);

        // Return to View List
        $this->index();
    }
}
