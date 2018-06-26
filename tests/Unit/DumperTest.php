<?php

namespace Panpan\Unit;

use Panpan\Dumper\Dumper;
use PHPUnit\Framework\TestCase;

/**
 * DumperTest
 */
class DumperTest extends TestCase
{
    /**
     * @return void
     */
    public function testDumper()
    {
        $dumper = new \Panpan\Dumper\Dumper();

        $this->assertInstanceOf(\Panpan\Dumper\Dumper::class, $dumper);
    }
}
