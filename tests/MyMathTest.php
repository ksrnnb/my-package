<?php

use PHPUnit\Framework\TestCase;
use ksrnnb\MyPackage\MyMath;

class MyMathTest extends TestCase
{
    /**
     * @var MyMath
     */
    protected $obj;

    public function setUp(): void
    {
        parent::setUp();
        $this->obj = new MyMath();
    }

    /**
     * 足し算のテストをする
     */
    public function testAdd(): void
    {
        $this->assertEquals(3 + 5, $this->obj->add(3, 5));
    }

    /**
     * 引き算のテストをする
     */
    public function testSub(): void
    {
        $this->assertEquals(3 - 5, $this->obj->sub(3, 5));
    }

    /**
     * かけ算のテストをする
     */
    public function testTime(): void
    {
        $this->assertEquals(3 * 5, $this->obj->time(3, 5));
    }

    /**
     * わり算のテストをする
     */
    public function testDiv(): void
    {
        $this->assertEquals(6 / 3, $this->obj->div(6, 3));
    }
}
