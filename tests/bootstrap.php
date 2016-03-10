<?php

/**
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE file.
 * Redistributions of files must retain the above copyright notice.
 * 
 * @copyright (c) 2016, Alejandro Alvaro
 * @link https://github.com/elalealvaro
 * @license http://opensource.org/licenses/mit-license.php The MIT License (MIT)
 */

/**
 * Phpunit bootstrap file
 * 
 * @author Alejandro Alvaro <alealvaro@gmail.com>
 */

$loader = require __DIR__ . '/../vendor/autoload.php';
$loader->addPsr4('Fixture\\', 'tests/Fixture');
