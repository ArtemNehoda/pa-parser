<?php

namespace App\Services;

class ShapeFormatService
{
    /**
     * Takes an array of strings and creates a square spiral formatted string from them
     */
    public function formatSquareSpiral(array $strings): string
    {
        $line = "";
        $strings = $this->prepareStrings(['prima riga', 'seconda riga', 'seconda_riga', 'terza riga', 'quarta riga']);
      // $strings = ['prima riga', 'seconda riga', 'seconda_riga', 'terza riga', 'quarta riga'];
        $size = strlen($strings[0]);
        $text = [];
        foreach ($strings as $key => $string) {
            $chars = str_split($string);
            for ($i = 0; $i < $size; $i++) {
                if(!isset($chars[$i])){
                    $chars[$i] = ' ';
                }
            }
            $text[$key] = $chars;
        }
        // dd($text);
        $a = $text;
        $m = count($text);
        $n = count($text[0]);
        $k = 0;
        $l = 0;

        /* $k - starting row index
            $m - ending row index
            $l - starting column index
            $n - ending column index
            $i - iterator
        */

        while ($k < $m && $l < $n)
        {
            /* Print the first row from
               the remaining rows */
            for ($i = $l; $i < $n; ++$i)
            {
                $line .= $a[$k][$i] . " ";
            }
            $k++;
            /* Print the last column
            from the remaining columns */
            for ($i = $k; $i < $m; ++$i)
            {
                $line .= $a[$i][$n - 1] . " ";
            }
            $n--;

            /* Print the last row from
               the remaining rows */
            if ($k < $m)
            {
                for ($i = $n - 1; $i >= $l; --$i)
                {
                    $line .= $a[$m - 1][$i] . " ";
                }
                $m--;
            }


            /* Print the first column from
               the remaining columns */
            if ($l < $n)
            {
                for ($i = $m - 1; $i >= $k; --$i)
                {
                    $line .= $a[$i][$l] . " ";
                }
                $l++;
            }
            $line .= "\n";

        }
      /* // return $ans;
       $matrix = $ans;

               // Print the matrix
               for ($row = 0; $row < $size; $row++) {
                for ($col = 0; $col < $size; $col++) {
                    $n = $matrix[$row][$col];
                    $line .= "{$n} ";
                }
                $line .= "\n";
            } */
            return $line;
    }

    public function prepareStrings($strings)
    {
        $strings = array_values(collect($strings)->sort(function ($a, $b) {
            return strlen($b) <=> strlen($a);
        })->toArray());

        if ($this->hasUniqueLengths($strings)) {
            return $strings;
        }

        for ($i = 0; $i < count($strings); $i++) {
            // se non è ultimo elemento
            if ($i < count($strings) - 1) {
                $current = $strings[$i];
                $next = $strings[$i + 1];
                if (strlen($current) == strlen($next)) {
                    $strings[$i] = "-{$current}-";
                }
            }
        }
        return $this->prepareStrings($strings);
    }

    public function hasUniqueLengths($strings)
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
