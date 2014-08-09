<?php

namespace Core;

use PHPUnit_Framework_TestCase as Base;

class ProcessTest extends Base
{
    public function testCreate()
    {
        $process = new Process();

        $this->assertInstanceOf('Core\Process', $process);
    }
}
