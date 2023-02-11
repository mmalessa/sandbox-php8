<?php

declare(strict_types=1);

namespace App\UI;

require_once(dirname(__DIR__) . '/../vendor/autoload.php');

use App\Sandbox\Printer\Printer;
use App\Sandbox\Printer\PrinterType;


$printer = new Printer(PrinterType::DotMatrix);

$printer->print("Something smart");


$x = array_column(PrinterType::cases(), "name");
print_r($x);