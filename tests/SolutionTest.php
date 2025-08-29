<?php
use PHPUnit\Framework\TestCase;
use App\Solution;

class SolutionTest extends TestCase {
    public function testSum() {
        $sol = new Solution();
        $this->assertEquals(4, $sol->sum(2, 2));
    }

    public function testSub() {
        $sol = new Solution();
        $this->assertEquals(8, $sol->substract(10, 2));
    }
}
