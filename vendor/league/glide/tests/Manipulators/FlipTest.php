<?php

namespace League\Glide\Manipulators;

use Mockery;
use PHPUnit\Framework\TestCase;

class FlipTest extends TestCase
{
    private $manipulator;

    public function setUp(): void
    {
        $this->manipulator = new Flip();
    }

    public function tearDown(): void
    {
        Mockery::close();
    }

    public function testCreateInstance()
    {
        $this->assertInstanceOf('League\Glide\Manipulators\Flip', $this->manipulator);
    }

    public function testRun()
    {
        $image = Mockery::mock('Intervention\Image\Image', function ($mock) {
            $mock->shouldReceive('flip')->andReturn($mock)->with('h')->once();
            $mock->shouldReceive('flip')->andReturn($mock)->with('v')->once();
        });

        $this->assertInstanceOf(
            'Intervention\Image\Image',
            $this->manipulator->setParams(['flip' => 'h'])->run($image)
        );

        $this->assertInstanceOf(
            'Intervention\Image\Image',
            $this->manipulator->setParams(['flip' => 'v'])->run($image)
        );
    }

    public function testGetFlip()
    {
        $this->assertSame('h', $this->manipulator->setParams(['flip' => 'h'])->getFlip());
        $this->assertSame('v', $this->manipulator->setParams(['flip' => 'v'])->getFlip());
    }
}
