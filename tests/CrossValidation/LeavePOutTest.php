<?php

namespace Rubix\ML\Tests\CrossValidation;

use Rubix\ML\CrossValidation\LeavePOut;
use Rubix\ML\CrossValidation\Validator;
use PHPUnit\Framework\TestCase;

class LeavePOutTest extends TestCase
{
    protected $validator;

    public function setUp()
    {
        $this->validator = new LeavePOut(50);
    }

    public function test_build_validator()
    {
        $this->assertInstanceOf(LeavePOut::class, $this->validator);
        $this->assertInstanceOf(Validator::class, $this->validator);
    }
}
