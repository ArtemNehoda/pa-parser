<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Helpers\Parsers\ParsersCreator;

class CharPairsParserTest extends TestCase
{
    public function getParser()
    {
        $creator = new ParsersCreator;
        return $creator->getParser('charPairsParser');
    }

    public function test_parsing_a_string1()
    {
        $data = "man";
        $result = $this->getParser()->parse($data);
        $expected = "a";

        $this->assertTrue($result === $expected);
    }

    public function test_parsing_a_string2()
    {
        $data = "keep";
        $result = $this->getParser()->parse($data);
        $expected = "ee";

        $this->assertTrue($result === $expected);
    }

    public function test_parsing_a_string3()
    {
        $data = "gqwertyuioplkjhgfdsazxcvbnm:?t";
        $result = $this->getParser()->parse($data);
        $expected = "qwertyuioplkjhgfdsazxcvbnm:?";

        $this->assertTrue($result === $expected);
    }

    public function test_parsing_a_string4()
    {
        $data = "abcdifghijklmnopqrstuvwxyz";
        $result = $this->getParser()->parse($data);
        $expected = "";

        $this->assertTrue($result === $expected);
    }

    public function test_parsing_multiple_strings()
    {
        $data = ['man', 'keep', 'gqwertyuioplkjhgfdsazxcvbnm:?t', 'abcdifghijklmnopqrstuvwxyz'];
        $result = $this->getParser()->parseAll($data);
        $expected = [
            'man' => 'a',
            'keep' => 'ee',
            'gqwertyuioplkjhgfdsazxcvbnm:?t' => 'qwertyuioplkjhgfdsazxcvbnm:?',
            'abcdifghijklmnopqrstuvwxyz' => ''
        ];
        $this->assertTrue($result === $expected);
    }
}
