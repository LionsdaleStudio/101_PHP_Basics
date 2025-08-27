<?php
use PHPUnit\Framework\TestCase;
use App\Multiply;

class SolutionTest extends TestCase {
    public function testSum() {
        $multiply = new Multiply();
        $this->assertEquals(6, $multiply->multiply(2, 3));
                $this->assertEquals(-3, $multiply->multiply(-1, 3));
    }
}