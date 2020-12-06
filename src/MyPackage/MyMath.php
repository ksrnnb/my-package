<?php

namespace ksrnnb\MyPackage;

class MyMath
{
    /**
     * 足し算する
     * @param int $a
     * @param int $b
     * @return int
     */
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }

    /**
     * 引き算する
     * @param int $a
     * @param int $b
     * @return int
     */
    public function sub(int $a, int $b): int
    {
        return $a - $b;
    }

    /**
     * 掛け算する
     * @param int $a
     * @param int $b
     * @return int
     */
    public function time(int $a, int $b): int
    {
        return $a * $b;
    }

    /**
     * 乗算
     * @param int $a
     * @param int $b
     * @return int
     */
    public function power(int $a, int $b): int
    {
        return $a ** $b;
    }

    /**
     * 割り算する
     * @param int $a
     * @param int $b
     * @return float
     */
    public function div(int $a, int $b): float
    {
        return $a / $b;
    }
}
