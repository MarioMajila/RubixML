<?php

use Rubix\ML\Datasets\Labeled;
use Rubix\Tests\Helpers\MockRegressor;
use Rubix\ML\Metrics\Validation\RSquared;
use Rubix\ML\Metrics\Validation\Validation;
use PHPUnit\Framework\TestCase;

class RSquaredTest extends TestCase
{
    protected $metric;

    public function setUp()
    {
        $this->testing = new Labeled([[], [], [], [], []], [10, 10, 6, 14, 8]);

        $this->estimator = new MockRegressor([9, 15, 9, 12, 8]);

        $this->metric = new RSquared();
    }

    public function test_build_r_squared_metric()
    {
        $this->assertInstanceOf(RSquared::class, $this->metric);
        $this->assertInstanceOf(Validation::class, $this->metric);
    }

    public function test_get_range()
    {
        $this->assertEquals([-INF, 1], $this->metric->range());
    }

    public function test_score_predictions()
    {
        $score = $this->metric->score($this->estimator, $this->testing);

        $this->assertEquals(2.2, $score, '', 5);
    }
}
