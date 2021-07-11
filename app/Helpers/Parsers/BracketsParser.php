<?php

namespace App\Helpers\Parsers;

class BracketsParser extends Parser
{
    private $brackets;

    public function __construct()
    {
        $this->brackets = config('main.parsers.brackets_pair');
    }

    public function parse(string $string): string
    {
        if (!$this->hasOuterBrackets($string)) {
            return $string;
        }

        /**
         ** String without the outermost brackets
         */
        $substring = substr($string, 1, -1);
        if ($this->hasBalancedBrackets($substring)) {
            return $this->parse($substring);
        }

        return $string;
    }

    private function hasBalancedBrackets(string $string): bool
    {
        $openingBracket = $this->getOpeningBracket();
        $closingBracket = $this->getClosingBracket();
        if (substr_count($string, $openingBracket) !== substr_count($string, $closingBracket)) {
            return false;
        }

        $counter = 0;
        $chars = str_split($string);

        foreach ($chars as $char) {
            /**
             ** If the counter is less than zero, it means there is a closing bracket without an opening bracket
             */
            if ($counter < 0) {
                return false;
            }

            if ($char == $openingBracket) {
                $counter++;
            }

            if ($char == $closingBracket) {
                $counter--;
            }
        }

        if ($counter > 0) {
            return false;
        }

        return true;
    }

    private function hasOuterBrackets(string $string): bool
    {
        $openingBracket = $this->getOpeningBracket();
        $closingBracket = $this->getClosingBracket();
        return substr_compare($string, $openingBracket, 0, 1) === 0 && substr_compare($string, $closingBracket, -1) === 0;
    }

    private function getOpeningBracket(): string
    {
        return $this->brackets[0];
    }

    private function getClosingBracket(): string
    {
        return $this->brackets[1];
    }
}
