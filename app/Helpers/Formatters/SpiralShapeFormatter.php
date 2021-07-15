<?php

namespace App\Helpers\Formatters;

class SpiralShapeFormatter
{
    /**
     ** Takes an array of strings and creates a square spiral formatted string from them
     */
    public function format(array $strings): string
    {
        if (count($strings) < 2) {
            return $strings[0];
        }
        $strings = $this->prepareStrings($strings);

        $xSize = strlen($strings[0]);
        $ySize = strlen($strings[1]) + 1;
        $matrix = $this->generateMatrix($xSize, $ySize);

        // Current pointer X
        $x = 0;
        // Current pointer Y
        $y = 0;
        /**
         ** Current direction
         ** r = Right
         ** l = Left
         ** t = Top
         ** b = Bottom
         */
        $direction = 'r';

        /**
         ** For each string, insert chars in the correct coordinates in $matrix, and then place the pointers for the next string and change the direction
         */
        foreach ($strings as $string) {
            $chars = str_split($string);
            // right
            if ($direction == 'r') {
                foreach ($chars as $char) {
                    $matrix[$y][$x++] = $char;
                }
                $x--;
                $y++;
            }
            // bottom
            if ($direction == 'b') {
                foreach ($chars as $char) {
                    $matrix[$y++][$x] = $char;
                }
                $y--;
                $x--;
            }
            // left
            if ($direction == 'l') {
                foreach ($chars as $char) {
                    $matrix[$y][$x--] = $char;
                }
                $x++;
                $y--;
            }
            // top
            if ($direction == 't') {
                foreach ($chars as $char) {
                    $matrix[$y--][$x] = $char;
                }
                $y++;
                $x++;
            }
            // change direction for every next string
            $direction = $this->changeDirection($direction);
        }
        return $this->matrixToString($matrix);
    }

    private function changeDirection(string $currentDirection): string
    {
        switch ($currentDirection) {
            case 'r':
                return 'b';
            case 'b':
                return 'l';
            case 'l':
                return 't';
            case 't':
                return 'r';
            default:
                return '';
        }
    }

    /**
     ** Generate a matrix of $xSize * $ySize size
     */
    public function generateMatrix(int $xSize, int $ySize, $valueForFilling = ' '): array
    {
        $matrix = array_fill(0, $ySize, $valueForFilling);
        foreach ($matrix as $key => $value) {
            $matrix[$key] = array_fill(0, $xSize, $valueForFilling);
        }
        return $matrix;
    }

    public function matrixToString(array $matrix): string
    {
        $line = "";
        foreach ($matrix as $key => $row) {
            $line .= implode('', $row) . "\n";
        }
        return $line;
    }

    public function prepareStrings(array $strings): array
    {
        $strings = array_values(collect($strings)
            ->filter(function ($string) {
                return !empty($string);
            })
            ->sort(function ($a, $b) {
                return strlen($b) <=> strlen($a);
            })->toArray());

        if ($this->hasUnpreparedStrings($strings)) {
            return $strings;
        }

        $length = count($strings);
        for ($i = 0; $i < $length; $i++) {
            // If it is not the last item
            if ($i < $length - 1) {
                $current = $strings[$i];
                $next = $strings[$i + 1];
                if (strlen($current) < strlen($next) + 1) {
                    $strings[$i] = "-{$current}-";
                }
            }
        }
        return $this->prepareStrings($strings);
    }

    public function hasUnpreparedStrings(array $strings): bool
    {
        $lengths = [];
        foreach ($strings as $string) {
            if (in_array(strlen($string), $lengths)) {
                return false;
            }
            $lengths[] = strlen($string);
        }
        return true;
    }
}
