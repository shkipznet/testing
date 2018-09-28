<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
    * @return void
    */
    public function testExample(): void
    {
        // Test fails
        $this->assertEquals(true, false);
    }
}
