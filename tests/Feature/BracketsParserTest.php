<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Helpers\Parsers\ParsersCreator;

class BracketsParserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function getParser()
    {
        $creator = new ParsersCreator;
        return $creator->getParser('bracketsParser');
    }

    public function test_parsing_a_string1()
    {
        $data = "(abc)";
        $result = $this->getParser()->parse($data);
        $expected = "abc";

        $this->assertTrue($result === $expected);
    }

    public function test_parsing_a_string2()
    {
        $data = "((abc))";
        $result = $this->getParser()->parse($data);
        $expected = "abc";

        $this->assertTrue($result === $expected);
    }

    public function test_parsing_a_string3()
    {
        $data = "(abc";
        $result = $this->getParser()->parse($data);
        $expected = "(abc";

        $this->assertTrue($result === $expected);
    }

    public function test_parsing_a_string4()
    {
        $data = "()";
        $result = $this->getParser()->parse($data);
        $expected = "";

        $this->assertTrue($result === $expected);
    }

    public function test_parsing_multiple_strings()
    {
        $data = ['(ab) (cd)', '((ab) (cd))', 'ab(cd)', '((abc))'];
        $result = $this->getParser()->parseAll($data);
        $expected = [
            '(ab) (cd)' => '(ab) (cd)',
            '((ab) (cd))' => '(ab) (cd)',
            'ab(cd)' => 'ab(cd)',
            '((abc))' => 'abc'
        ];
        $this->assertTrue($result === $expected);
    }


    /*
| Input         | Output        |
|---------------|---------------|
| `(abc)`       | `abc`         |
| `((abc))`     | `abc`         |
| `(abc`        | `(abc`        |
|               |               |
| `()`          |               |
| `(ab) (cd)`   | `(ab) (cd)`   |
| `((ab) (cd))` | `(ab) (cd)`   |
| `ab(cd)`      | `ab(cd)`      |
    */
}
