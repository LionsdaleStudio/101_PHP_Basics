<?php
use PHPUnit\Framework\TestCase;
use App\Solution;

class SolutionTest extends TestCase {
    public function testSum() {
        $sol = new Solution();
        $this->assertEquals(4, $sol->sum(2, 2));
    }
}
