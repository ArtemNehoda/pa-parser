<?php

return [
    'parsers' => [
        /**
         ** Pair of brackets that is used in App\Helpers\Parsers\BracketsParser
         */
        'brackets_pair' => ['(', ')'],
        /**
         ** Char pairs that are used in App\Helpers\Parsers\CharPairsParser
         */
        'char_pairs' => ['az', 'by', 'cx', 'dw', 'iv', 'fu', 'gt', 'hs', 'ir', 'jq', 'kp', 'lo', 'mn'],
        'token_length' => 30,
        /**
         ** Parser Results token lifetime. unit: days
         */
        'token_expires_in' => 1,
    ]
];
