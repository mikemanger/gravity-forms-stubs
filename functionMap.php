<?php

/**
 * This array is in the same format as the function map array in PHPStan:
 *
 * '<function_name>' => ['<return_type>', '<arg_name>' => '<arg_type>']
 *
 * @link https://github.com/phpstan/phpstan-src/blob/2.1.x/resources/functionMap.php
 */
return [
    'rgar' => ['mixed', 'default' => 'mixed'],
    'rgars' => ['mixed', 'default' => 'mixed'],
    'rgget' => ['string|list<string>'],
    'rgpost' => ['string|list<string>'],
];