<?php
/**
 * Example test.
 */
namespace Test;

use App\Example;
use PHPUnit\Framework\TestCase;

/**
 * Class ExampleTest.
 */
class ExampleTest extends TestCase
{
    /**
     * Test Example.
     */
    public function testExample()
    {
        $this->assertEquals(true, is_object(new Example()));
    }
}