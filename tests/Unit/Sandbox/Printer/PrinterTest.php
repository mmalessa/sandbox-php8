<?php

declare(strict_types=1);

namespace App\Tests\Unit\Sandbox\Printer;

use App\Sandbox\Printer\Printer;
use App\Sandbox\Printer\PrinterType;
use PHPUnit\Framework\TestCase;

class PrinterTest extends TestCase
{
    public function test_print()
    {
        $this->expectOutputString("[DotMatrix] abc\n");
        $printer = new Printer(PrinterType::DotMatrix);
        $printer->print("abc");
    }

    public function test_dummy()
    {
        $printer = new Printer(PrinterType::Ink);
        $this->assertEquals('something else', $printer->dummy('abcd'));
    }
}