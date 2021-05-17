<?php
namespace App\Models;

use App\Models\Coders;

class Logger {
    public function logCreate ($newCoder){
        $logFile = fopen("./src/logs/log.txt", 'a') or die("Error creando archivo");
        fwrite($logFile, "\n".date("d/m/Y H:i:s")." se ha creado una solicitud con Nombre del Coder: "." {$newCoder->getcoder()}"."y con Issue: "." {$newCoder->getissue()}") or 
            die("Error escribiendo en el archivo");fclose($logFile);
    }

    public function logUpdate ($newCoder){
        $logFile = fopen("./src/logs/log.txt", 'a') or die("Error creando archivo");
        fwrite($logFile, "\n".date("d/m/Y H:i:s")." se ha actualizado ID:"." {$newCoder->getId()}"." con Nombre del Coder: "." {$newCoder->getcoder()}"." y con Issue: "." {$newCoder->getissue()}") or 
            die("Error escribiendo en el archivo");fclose($logFile);
    }

    public function logDelete ($newCoder){
        $logFile = fopen("./src/logs/log.txt", 'a') or die("Error creando archivo");
        fwrite($logFile, "\n".date("d/m/Y H:i:s")." se ha eliminado ID:"." {$newCoder->getId()}"." con Nombre del Coder: "." {$newCoder->getcoder()}") or 
            die("Error escribiendo en el archivo");fclose($logFile);

    }


}

?>