<?php

namespace App\Services;

use App\Helpers\Formatters\SpiralShapeFormatter;

class ShapeFormatService
{
    public function __construct()
    {
        $this->formatter = new SpiralShapeFormatter;
    }

    public function formatSquareSpiral(array $strings): string
    {
        return $this->formatter->format($strings);
    }
}
