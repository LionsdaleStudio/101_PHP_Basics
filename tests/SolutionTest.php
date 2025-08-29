<?php
use PHPUnit\Framework\TestCase;
use App\Solution;

class SolutionTest extends TestCase
{

/*
----------------------------------------------------------------------
Matematikai alapműveletek tesztek
----------------------------------------------------------------------
*/
    public function testSum()
    {
        $sol = new Solution();
        $this->assertEquals(4, $sol->sum(2, 2));
    }

    public function testSub()
    {
        $sol = new Solution();
        $this->assertEquals(8, $sol->substract(10, 2));
    }

    public function testMultiply()
    {
        $sol = new Solution();
        $this->assertEquals(20, $sol->multiply(4, 5));
        $this->assertEquals(0, $sol->multiply(10, 0));
        $this->assertEquals(-15, $sol->multiply(-3, 5));
    }

    public function testDivide()
    {
        $sol = new Solution();
        $this->assertEquals(5, $sol->divide(10, 2));
        $this->assertEquals(3, $sol->divide(9, 3));
        $this->assertEquals(-4, $sol->divide(-20, 5));
    }

    public function testPower()
    {
        $sol = new Solution();
        $this->assertEquals(8, $sol->power(2, 3));
        $this->assertEquals(1, $sol->power(5, 0));
        $this->assertEquals(16, $sol->power(2, 4));
    }

    public function testSqrt()
    {
        $sol = new Solution();
        $this->assertEquals(3, $sol->sqrt(9, 0));     // b paraméter figyelmen kívül marad
        $this->assertEquals(5, $sol->sqrt(25, 99));   // mindig a négyzetgyök kell
    }

    public function testRDrootOf()
    {
        $sol = new Solution();
        $this->assertEquals(3, $sol->RDrootOf(27, 3));  // 3. gyök 27-ből = 3
        $this->assertEquals(2, $sol->RDrootOf(16, 4));  // 4. gyök 16-ból = 2
    }

    public function testRemainder()
    {
        $sol = new Solution();
        $this->assertEquals(1, $sol->remainder(10, 3));
        $this->assertEquals(0, $sol->remainder(20, 5));
        $this->assertEquals(2, $sol->remainder(17, 5));
    }

/*
----------------------------------------------------------------------
String alapműveletek tesztek
----------------------------------------------------------------------
*/

    public function testStringLength()
    {
        $sol = new Solution();
        $this->assertEquals(5, $sol->stringLength("Hello"));
        $this->assertEquals(0, $sol->stringLength(""));
    }

    public function testToUpperCase()
    {
        $sol = new Solution();
        $this->assertEquals("HELLO", $sol->toUpperCase("hello"));
        $this->assertEquals("ÁRVÍZTŰRŐ TÜKÖRFÚRÓGÉP", $sol->toUpperCase("árvíztűrő tükörfúrógép"));
    }

    public function testToLowerCase()
    {
        $sol = new Solution();
        $this->assertEquals("hello", $sol->toLowerCase("HELLO"));
        $this->assertEquals("árvíztűrő tükörfúrógép", $sol->toLowerCase("ÁRVÍZTŰRŐ TÜKÖRFÚRÓGÉP"));
    }

    public function testReverseString()
    {
        $sol = new Solution();
        $this->assertEquals("olleH", $sol->reverseString("Hello"));
        $this->assertEquals("!dlroW", $sol->reverseString("World!"));
    }

    public function testContainsWord()
    {
        $sol = new Solution();
        $this->assertTrue($sol->containsWord("Hello world", "world"));
        $this->assertFalse($sol->containsWord("Hello world", "mars"));
    }

    public function testSubstring()
    {
        $sol = new Solution();
        $this->assertEquals("Hel", $sol->substring("Hello", 0, 3));
        $this->assertEquals("llo", $sol->substring("Hello", 2, 3));
    }

    public function testSplitWords()
    {
        $sol = new Solution();
        $this->assertEquals(["Hello", "world"], $sol->splitWords("Hello world"));
        $this->assertEquals(["egy", "kettő", "három"], $sol->splitWords("egy kettő három"));
    }

    public function testJoinWords()
    {
        $sol = new Solution();
        $this->assertEquals("Hello world", $sol->joinWords(["Hello", "world"]));
        $this->assertEquals("egy kettő három", $sol->joinWords(["egy", "kettő", "három"]));
    }

    public function testCapitalizeFirst()
    {
        $sol = new Solution();
        $this->assertEquals("Hello", $sol->capitalizeFirst("hello"));
        $this->assertEquals("World", $sol->capitalizeFirst("world"));
    }

    public function testTrimText()
    {
        $sol = new Solution();
        $this->assertEquals("Hello", $sol->trimText("   Hello   "));
        $this->assertEquals("Word", $sol->trimText("\n\t Word \t\n"));
    }

/*
----------------------------------------------------------------------
Array alapműveletek tesztek
----------------------------------------------------------------------
*/

    public function testCountElements()
    {
        $sol = new Solution();
        $this->assertEquals(3, $sol->countElements([1, 2, 3]));
        $this->assertEquals(0, $sol->countElements([]));
    }

    public function testSumArray()
    {
        $sol = new Solution();
        $this->assertEquals(6, $sol->sumArray([1, 2, 3]));
        $this->assertEquals(0, $sol->sumArray([]));
    }

    public function testMaxElement()
    {
        $sol = new Solution();
        $this->assertEquals(9, $sol->maxElement([1, 9, 3]));
    }

    public function testMinElement()
    {
        $sol = new Solution();
        $this->assertEquals(1, $sol->minElement([1, 9, 3]));
    }

    public function testContainsValue()
    {
        $sol = new Solution();
        $this->assertTrue($sol->containsValue([1, 2, 3], 2));
        $this->assertFalse($sol->containsValue([1, 2, 3], 5));
    }

    public function testFirstElement()
    {
        $sol = new Solution();
        $this->assertEquals(1, $sol->firstElement([1, 2, 3]));
        $this->assertNull($sol->firstElement([]));
    }

    public function testLastElement()
    {
        $sol = new Solution();
        $this->assertEquals(3, $sol->lastElement([1, 2, 3]));
        $this->assertNull($sol->lastElement([]));
    }

    public function testReverseArray()
    {
        $sol = new Solution();
        $this->assertEquals([3, 2, 1], $sol->reverseArray([1, 2, 3]));
    }

    public function testSortArray()
    {
        $sol = new Solution();
        $this->assertEquals([1, 2, 3], $sol->sortArray([3, 1, 2]));
    }

    public function testMergeArrays()
    {
        $sol = new Solution();
        $this->assertEquals([1, 2, 3, 4], $sol->mergeArrays([1, 2], [3, 4]));
    }

    public function testGetValueByKey()
    {
        $sol = new Solution();
        $this->assertEquals("John", $sol->getValueByKey(["name" => "John", "age" => 30], "name"));
        $this->assertNull($sol->getValueByKey(["name" => "John"], "age"));
    }

    public function testAddKeyValue()
    {
        $sol = new Solution();
        $this->assertEquals(["name" => "John", "age" => 30], $sol->addKeyValue(["name" => "John"], "age", 30));
    }

    public function testRemoveValue()
    {
        $sol = new Solution();
        $this->assertEquals([1, 3], array_values($sol->removeValue([1, 2, 3], 2)));
    }

    public function testGetKeys()
    {
        $sol = new Solution();
        $this->assertEquals(["name", "age"], $sol->getKeys(["name" => "John", "age" => 30]));
    }

    public function testGetValues()
    {
        $sol = new Solution();
        $this->assertEquals(["John", 30], $sol->getValues(["name" => "John", "age" => 30]));
    }

}
