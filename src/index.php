<?php

namespace App;

use App\Controllers\CodersController;
use App\Models\Logger;


$controller = new CodersController(new Logger());

