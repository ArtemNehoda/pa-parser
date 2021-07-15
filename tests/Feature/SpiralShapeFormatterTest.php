<?php

namespace Tests\Feature;

use App\Helpers\Formatters\SpiralShapeFormatter;
use Tests\TestCase;

class SpiralShapeFormatterTest extends TestCase
{
    public function getFormatter()
    {
        $formatter = new SpiralShapeFormatter;
        return $formatter;
    }

    public function test_formatting_a_spiral1()
    {
        $data = [
            "primariga",
            "secondariga",
            "terzariga",
        ];
        $result = $this->getFormatter()->format($data);
        $expected = file_get_contents(base_path('tests/testdata/spiral.txt'));

        $this->assertTrue($result === $expected);
    }

    public function test_formatting_a_spiral_with_one_string()
    {
        $data = [
            "onlyonestring",
        ];
        $result = $this->getFormatter()->format($data);
        $expected = "onlyonestring";

        $this->assertTrue($result === $expected);
    }
}
