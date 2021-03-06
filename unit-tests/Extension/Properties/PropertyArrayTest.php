<?php

/*
 +--------------------------------------------------------------------------+
 | Zephir                                                                   |
 | Copyright (c) 2013-present Zephir Team (https://zephir-lang.com/)        |
 |                                                                          |
 | This source file is subject the MIT license, that is bundled with this   |
 | package in the file LICENSE, and is available through the world-wide-web |
 | at the following url: http://zephir-lang.com/license.html                |
 +--------------------------------------------------------------------------+
*/

namespace Extension\Properties;

use Test\Properties\PropertyArray;

class PropertyArrayTest extends \PHPUnit_Framework_TestCase
{
    public function testAssertations()
    {
        $t = new PropertyArray();
        $this->assertSame(array(1), $t->someArray);
    }
}
