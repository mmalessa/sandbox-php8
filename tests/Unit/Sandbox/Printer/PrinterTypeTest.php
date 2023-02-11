<?php

declare(strict_types=1);

namespace App\Tests\Unit\Sandbox\Printer;

use App\Sandbox\Printer\PrinterType;
use PHPUnit\Framework\TestCase;

class PrinterTypeTest extends TestCase
{
    public function test_enums()
    {
        $this->assertEquals(
            array_column(PrinterType::cases(), "name"),
            ['Laser', 'Ink', 'DotMatrix']
        );
    }
}