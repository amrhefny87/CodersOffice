<?php
namespace App\Models;

use App\Models\Coders;

class Logger {
    
    private $dirOpenLog = "./src/logs/log.txt";

    public function logCreate ($newCoder){
        $logFile = fopen("{$this->dirOpenLog}", 'a') or die("Error creando archivo");
        fwrite($logFile, "\n".date("d/m/Y H:i:s")." se ha creado una solicitud con Nombre del Coder: "."{$newCoder->getcoder()}"." con Issue: "."{$newCoder->getissue()}") or 
            die("Error escribiendo en el archivo");fclose($logFile);
    }

    public function logUpdate ($newCoder){
        $logFile = fopen("{$this->dirOpenLog}", 'a') or die("Error creando archivo");
        fwrite($logFile, "\n".date("d/m/Y H:i:s")." se ha actualizado ID: "."{$newCoder->getId()}"." con Nombre del Coder: "."{$newCoder->getcoder()}"." con Issue: "."{$newCoder->getissue()}") or 
            die("Error escribiendo en el archivo");fclose($logFile);
    }

    public function logDelete ($newCoder){
        $logFile = fopen("{$this->dirOpenLog}", 'a') or die("Error creando archivo");
        fwrite($logFile, "\n".date("d/m/Y H:i:s")." se ha eliminado ID: "."{$newCoder->getId()}"." con Nombre del Coder: "."{$newCoder->getcoder()}"." con Issue: "."{$newCoder->getissue()}") or 
            die("Error escribiendo en el archivo");fclose($logFile);

    }

}

?>