<?php

declare(strict_types=1);

namespace App\Sandbox\Printer;

enum PrinterType
{
    case Laser;
    case Ink;
    case DotMatrix;
}
