<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class SecondTest extends TestCase
{
    public function testIsFalse(): void
    {
        sleep(5);
        $this->assertFalse(false);
    }

    public function testIsTrue(): void
    {
        sleep(5);
        $this->assertTrue(true);
    }

    public function testIsNull(): void
    {
        sleep(5);
        $this->assertNull(null);
    }

    public function testIsArray(): void
    {
        sleep(5);
        $this->assertIsArray([]);
    }

}