<?php

namespace Rubix\ML\Tests\Other\Functions;

use Rubix\ML\Other\Functions\LogSumExp;
use PHPUnit\Framework\TestCase;

class LogSumExpTest extends TestCase
{
    protected $values;

    protected $outcome;

    public function setUp()
    {
        $this->values = [
            0.5, 0.4, 0.9, 1.0, 0.2, 0.9, 0.1, 0.5, 0.7,
        ];

        $this->outcome = 2.8194175400311074;
    }

    public function test_compute()
    {
        $value = LogSumExp::compute($this->values);

        $this->assertEquals($this->outcome, $value, '', 1e-3);
    }
}
