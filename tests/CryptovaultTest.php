<?php
/**
 * Tests for CryptoVault
 */

use PHPUnit\Framework\TestCase;
use Cryptovault\Cryptovault;

class CryptovaultTest extends TestCase {
    private Cryptovault $instance;

    protected function setUp(): void {
        $this->instance = new Cryptovault(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cryptovault::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
