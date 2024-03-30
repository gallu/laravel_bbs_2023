<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     * @test
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
        $this->assertEquals(1, '1', 'message? Equals'); // ==
        // $this->assertNotEquals(1, '1', 'message? Not Equals'); // ==
        // $this->assertSame(1, '1', 'message? Same'); // ===
        $this->assertNotSame(1, '1', 'message? Not Same'); // ===
    }

    public function test_float(): void
    {
        // $this->assertSame(0.1+0.2, 0.3, '0.1+0.2　は　0.3?');
        // var_dump(0.1+0.2 === 0.3);

        $f = abs((0.1+0.2) - (0.3));
        $this->assertSame($f < 0.00001, true, '0.1+0.2　は　0.3?');

        $this->assertEqualsWithDelta(0.1+0.2, 0.3, 0.000000001, '0.1+0.2　は　0.3?');
    }

    /**
     * @dataProvider data足し算のデータ
     */
    public function test_data($args, $want): void
    {
        $i = $args["i"] + $args["j"];
        // $this->assertSame($i, $want, "Error: {$name}");
        $this->assertSame($i, $want);
    }
    
    public static function data足し算のデータ(): array
    {
        //　テストデータ
        return [
            "単純な足し算" => [
                // 入力データ群
                "args" => [
                    "i" => 1,
                    "j" => 2,
                ],
                //　期待する出力
                "want" => 3,
            ],
        ];
    }
}
