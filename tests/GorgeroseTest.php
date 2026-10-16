<?php
/**
 * Tests for GorgeRose
 */

use PHPUnit\Framework\TestCase;
use Gorgerose\Gorgerose;

class GorgeroseTest extends TestCase {
    private Gorgerose $instance;

    protected function setUp(): void {
        $this->instance = new Gorgerose(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Gorgerose::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
