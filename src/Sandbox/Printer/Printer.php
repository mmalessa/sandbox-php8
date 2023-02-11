<?php

declare(strict_types=1);

namespace App\Sandbox\Printer;

class Printer
{
    public function __construct(private PrinterType $type)
    {
    }

    public function print(string $text): void
    {
        printf("[%s] $text\n", $this->type->name, $text);
    }

    public function dummy(string $text): string
    {
        if($text == "something") {
            return "something";
        } else {
            return "something else";
        }
    }
}